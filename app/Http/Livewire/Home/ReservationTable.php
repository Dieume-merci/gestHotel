<?php

namespace App\Http\Livewire\home;

use App\Models\Reservation;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class ReservationTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Reservation>
     */
    public function datasource(): Builder
    {
        return Reservation::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('id')
            ->addColumn('Ui',fn (Reservation $Reservation) => "<img src='https://eu.ui-avatars.com/api/?name=".$Reservation->Client->User->nom.' '.$Reservation->Client->User->postnom.' '.$Reservation->Client->User->prenom."&background=random&color=fff&rounded=true&bold=true'>")
            ->addColumn('nomcomplet', fn (Reservation $Reservation) => $Reservation->Client->User->nom.' '.$Reservation->Client->User->postnom.' '.$Reservation->Client->User->prenom)
            ->addColumn('email', fn (Reservation $Reservation) => "<a href='mailto:".$Reservation->Client->User->email."' target='_blank'>".$Reservation->Client->User->email."<a/>")
            // ->addColumn('reservations', fn (Reservation $Reservation) => count($Reservation->Client->Reservations))
            ->addColumn('reservation', fn (Reservation $Reservation) => $Reservation->Espace->Type->designation)
            ->addColumn('date_res', fn (Reservation $Reservation) =>'le '.Carbon::parse($Reservation->date_reservee)->format('d/m/Y H:i:s')." jusqu'à ".Carbon::parse($Reservation->date_reservee)->addHours($Reservation->heure)->format('H:i:s'))
            ->addColumn('montant', fn (Reservation $Reservation) =>$Reservation->montant.' $')
            ->addColumn('created_at_formatted', fn (Reservation $Reservation) => Carbon::parse($Reservation->created_at)->format('d/m/Y à H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
      * PowerGrid Columns.
      *
      * @return array<int, Column>
      */
    public function columns(): array
    {
        return [
            Column::make('#', 'id'),
            Column::make('UI', 'Ui'),
            Column::make('Nom', 'nomcomplet'),
            Column::make('Adresse Mail', 'email'),
            // Column::make('Nbre Reservation', 'reservations'),
            Column::make('Reservation', 'reservation'),
            Column::make('Date Res', 'date_res'),
            Column::make('Montant', 'montant','montant'),
            Column::make('Date Enregistrement', 'created_at_formatted', 'created_at')
                ->sortable(),

        ];
    }

    /**
     * PowerGrid Filters.
     *
     * @return array<int, Filter>
     */
    public function filters(): array
    {
        return [
            Filter::datetimepicker('created_at','montant'),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Reservation Action Buttons.
     *
     * @return array<int, Button>
     */

   
    public function actions(): array
    {
       return [
        //    Button::make('edit', 'Modifier')
        //        ->class('btn btn-outline-warning btn-rounded mdi mdi-lead-pencil btn-sm')
        //        ->emit("Reservation",['id']),

           Button::make('view', 'Voir')
               ->class('btn btn-outline-success mdi mdi-eye btn-sm btn-rounded')
               ->emit("ReservationView",['id']),
        ];
    }
   

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Reservation Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($Reservation) => $Reservation->id === 1)
                ->hide(),
        ];
    }
    */
}
