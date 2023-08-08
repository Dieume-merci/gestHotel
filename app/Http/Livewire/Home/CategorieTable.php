<?php

namespace App\Http\Livewire\home;

use App\Models\Categorie;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class CategorieTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Categorie>
     */
    public function datasource(): Builder
    {
        return Categorie::query();
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
            ->addColumn('Ui',fn (Categorie $Categorie) => "<img src='https://eu.ui-avatars.com/api/?name=".$Categorie->designation."'>")
            ->addColumn('designation', fn (Categorie $Categorie) => $Categorie->designation)
            ->addColumn('origine', fn (Categorie $Categorie) => $Categorie->Reserves->last()->Clients->designation)
            ->addColumn('quantite', fn (Categorie $Categorie) => $Categorie->Reserves->last()->quantite.' '.$Categorie->unite)
            ->addColumn('quantitetotale', fn (Categorie $Categorie) => $Categorie->Reserves->last()->quantite_totale.' '.$Categorie->unite)
            ->addColumn('quantitetotalegenerale', fn (Categorie $Categorie) => $Categorie->Reserves->last()->quantite_totale_generale.' '.$Categorie->unite)
            ->addColumn('created_at_formatted', fn (Categorie $Categorie) => Carbon::parse($Categorie->created_at)->format('d/m/Y H:i:s'));
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
            Column::make('Origine', 'origine'),
            Column::make('Quantité', 'quantite'),
            Column::make('Quantité Totale', 'quantitetotale'),
            Column::make('Quantité Totale generale', 'quantitetotalegenerale'),
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
     * PowerGrid Categorie Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('categorie.edit', function(\App\Models\Categorie $Categorie) {
                    return $Categorie->id;
               }),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('categorie.destroy', function(\App\Models\Categorie $Categorie) {
                    return $Categorie->id;
               })
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Categorie Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($categorie) => $categorie->id === 1)
                ->hide(),
        ];
    }
    */
}
