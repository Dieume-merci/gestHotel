<?php

namespace App\Http\Livewire\home;

use App\Models\Type;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class TypeTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Type>
     */
    public function datasource(): Builder
    {
        return Type::query();
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
            ->addColumn('Ui',fn (Type $Type) => "<img src='https://eu.ui-avatars.com/api/?name=".$Type->designation."&background=random&color=fff&rounded=true&bold=true'>")
            ->addColumn('designation', fn (Type $Type) => $Type->designation)
            ->addColumn('nombre', fn (Type $Type) => count($Type->Espaces)."".strtolower($Type->designation)."(s)")
            ->addColumn('created_at_formatted', fn (Type $Type) => Carbon::parse($Type->created_at)->format('d/m/Y H:i:s'));
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
            Column::make('Id', 'id'),
            Column::make('UI', 'Ui'),
            Column::make('Désignation', 'designation'),
            Column::make('Nombre Agent', 'nombre'),
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
     * PowerGrid Type Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
           Button::make('edit', 'Modifier')
               ->class('btn btn-outline-warning btn-rounded mdi mdi-lead-pencil btn-sm')
               ->emit("editType",['id']),

           Button::make('Delete', 'Sup.')
               ->class('btn btn-outline-danger mdi mdi-alert-octagon btn-sm btn-rounded')
               ->emit("destroytype",['id']),
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
     * PowerGrid Type Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($Type) => $Type->id === 1)
                ->hide(),
        ];
    }
    */
}
