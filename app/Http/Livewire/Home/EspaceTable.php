<?php

namespace App\Http\Livewire\home;

use App\Models\Espace;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class EspaceTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;
    protected $listeners = ['refreshPowerGrid'=>'$refresh'];
    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'refreshPowerGrid' => '$refresh',
            ]);
    }
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
     * @return Builder<\App\Models\Espace>
     */
    public function datasource(): Builder
    {
        return Espace::query();
        // ->where("entreprise_id",Auth::user()->entreprises->id);
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
            ->addColumn('Ui',fn (Espace $espace) => "<img src='https://eu.ui-avatars.com/api/?name=".$espace->designation."&background=random&color=fff&rounded=true&bold=true'>")
            ->addColumn('id')
            ->addColumn('designation', fn (Espace $espace) => $espace->designation)
            ->addColumn('Cout', fn (Espace $espace) => $espace->cout.'$')
            ->addColumn('type', fn (Espace $espace) => $espace->Type->designation)
            ->addColumn('image', fn (Espace $espace) => "<a href='".$espace->image."' target='_blank'>"."<img src='".$espace->image."'>"."</a>")
            // ->addColumn('date_fin', fn (Espace $espace) => Carbon::parse($espace->date_fin)->format('d/m/Y à H:i:s'))
            // ->addColumn('contact', fn (Espace $espace) => "<a href='https://wa.me/".$espace->contact."'>".$espace->contact."<a/>")
            // ->addColumn('close', fn (Espace $espace) =>"<a href='".$espace->close."' target='_blank'>Voir</a>")
            ->addColumn('created_at_formatted', fn (Espace $espace) => Carbon::parse($espace->created_at)->format('d/m/Y à H:i:s'));
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
            Column::make('UI','Ui'),
            Column::make('#', 'id'),
            Column::make('Designation', 'designation'),
            Column::make('Coût', 'Cout'),
            Column::make('Type Espace', 'type'),
            Column::make('Image','image'),
            Column::make('Date Enregistrement', 'created_at_formatted','created_at')
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
            Filter::datetimepicker('created_at'),
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
     * PowerGrid Espace Action Buttons.
     *
     * @return array<int, Button>
     */

   
    public function actions(): array
    {
        return [
            Button::make('edit', 'Modifier')
                ->class('btn btn-outline-warning btn-rounded mdi mdi-lead-pencil btn-sm')
                ->emit("Espaceedit",['id']),
 
            Button::make('view', 'Sup')
                ->class('btn btn-outline-danger mdi mdi-eye btn-sm btn-rounded')
                ->emit("Espacedelete",['id']),
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
     * PowerGrid Espace Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($Espace) => $Espace->id === 1)
                ->hide(),
        ];
    }
    */
}
