<?php

namespace App\Http\Livewire\home;

use App\Models\Agent;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class AgentTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Agent>
     */
    public function datasource(): Builder
    {
        return Agent::query()->where("entreprise_id",Auth::user()->entreprises->id);
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
            ->addColumn('Ui',fn (Agent $Agent) => "<img src='https://eu.ui-avatars.com/api/?name=".$Agent->nom.' '.$Agent->postnom."&background=random&color=fff&rounded=true&bold=true'>")
            ->addColumn('nomcomplet', fn (Agent $Agent) => $Agent->nom.' '.$Agent->postnom.' '.$Agent->prenom)
            ->addColumn('contact', fn (Agent $Agent) => "<a href='https://wa.me/".$Agent->contact."' target='_blank'>".$Agent->contact."<a/>")
            ->addColumn('civilite', fn (Agent $Agent) => $Agent->civilite)
            ->addColumn('email', fn (Agent $Agent) => "<a href='mailto:".$Agent->email."' target='_blank'>".$Agent->email."<a/>")
            ->addColumn('fonction', fn (Agent $Agent) =>$Agent->fonction)
            ->addColumn('date_debut', fn (Agent $Agent) => $retVal = (!empty($Agent->Convention)) ? Carbon::parse($Agent->Convention->date_debut)->format('d/m/Y à H:i:s') : "<span class='alert alert-warning'>Le contrat Non defini</span>")
            ->addColumn('created_at_formatted', fn (Agent $Agent) => Carbon::parse($Agent->created_at)->format('d/m/Y à H:i:s'));
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
            Column::make('Civilité', 'civilite'),
            Column::make('E-mail', 'email'),
            Column::make('Contact', 'contact'),
            Column::make('Fonction', 'fonction'),
            Column::make('Date De signature contrat', 'date_debut'),
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
     * PowerGrid Agent Action Buttons.
     *
     * @return array<int, Button>
     */

   
    public function actions(): array
    {
       return [
           Button::make('edit', 'Modifier')
               ->class('btn btn-outline-warning btn-rounded mdi mdi-lead-pencil btn-sm')
               ->emit("Agent",['id']),

           Button::make('view', 'Voir')
               ->class('btn btn-outline-success mdi mdi-eye btn-sm btn-rounded')
               ->emit("AgentView",['id']),
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
     * PowerGrid Agent Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($agent) => $agent->id === 1)
                ->hide(),
        ];
    }
    */
}
