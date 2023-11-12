<?php

namespace App\Http\Livewire\home;

use App\Models\Commentaire;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
// use App\Http\Middleware\EnsureUserHasRole;
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class CommentaireTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Commentaire>
     */
    public function datasource(): Builder
    {
        if(auth()->user()->roles()->where('designation','admin')->exists()){
            return Commentaire::query();
        }else {
            return Commentaire::query()->where("client_id",Auth::user()->Client->id);
        }        
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
        if(auth()->user()->roles()->where('designation','admin')->exists()){ 
            return PowerGrid::columns()
                ->addColumn('id')
                ->addColumn('Ui',fn (Commentaire $Commentaire) => "<img src='https://eu.ui-avatars.com/api/?name=".$Commentaire->contenu."&background=random&color=fff&rounded=true&bold=true'>")
                ->addColumn('designation', fn (Commentaire $Commentaire) => $Commentaire->contenu)
                ->addColumn('destinataire', fn (Commentaire $Commentaire) => $Commentaire->Client->User->nom.''.$Commentaire->Client->User->postnom.' '.$Commentaire->Client->User->prenom)
                ->addColumn('created_at_formatted', fn (Commentaire $Commentaire) => Carbon::parse($Commentaire->created_at)->format('d/m/Y à H:i:s'))
                ->addColumn('repondre', fn (Commentaire $Commentaire) => "<a class='btn btn-outline-success mdi mdi-eye btn-sm btn-rounded' href='mailto:".$Commentaire->Client->User->email."'> Repondre</a>");
        }else {
            return PowerGrid::columns()
                ->addColumn('id')
                ->addColumn('Ui',fn (Commentaire $Commentaire) => "<img src='https://eu.ui-avatars.com/api/?name=".$Commentaire->contenu."&background=random&color=fff&rounded=true&bold=true'>")
                ->addColumn('designation', fn (Commentaire $Commentaire) => $Commentaire->contenu)
                ->addColumn('destinataire', fn (Commentaire $Commentaire) => $Commentaire->Client->User->nom.''.$Commentaire->Client->User->postnom.' '.$Commentaire->Client->User->prenom)
                ->addColumn('created_at_formatted', fn (Commentaire $Commentaire) => Carbon::parse($Commentaire->created_at)->format('d/m/Y à H:i:s'));
                // ->addColumn('repondre', fn (Commentaire $Commentaire) => "<a class='btn btn-outline-success mdi mdi-eye btn-sm btn-rounded' href='malto:".$Commentaire->Client->User->email."'> Repondre</a>");
        }
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
        if(auth()->user()->roles()->where('designation','admin')->exists()){ 
            return [
                Column::make('Id', 'id'),
                Column::make('UI', 'Ui'),
                Column::make('Destinataire', 'destinataire'),
                Column::make('Contenu', 'designation'),
                Column::make('Date Enregistrement', 'created_at_formatted', 'created_at')->sortable(),
                Column::make('Repondre','repondre'),
            ];
        }
        else {
            return [
                Column::make('Id', 'id'),
                Column::make('UI', 'Ui'),
                Column::make('Destinataire', 'destinataire'),
                Column::make('Contenu', 'designation'),
                Column::make('Date Enregistrement', 'created_at_formatted', 'created_at')->sortable(),
            ];
        }
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
     * PowerGrid Commentaire Action Buttons.
     *
     * @return array<int, Button>
     */

    
    // public function actions(): array
    // {
    //    return [
    //        Button::make('edit', 'Modifier')
    //            ->class('btn btn-outline-warning btn-rounded mdi mdi-lead-pencil btn-sm')
    //            ->route('commentaire.index', function(\App\Models\Commentaire $Commentaire) {
    //                 return $Commentaire->id;
    //            }),

    //        Button::make('destroy', 'Delete')
    //            ->class('btn btn-outline-warning btn-rounded mdi mdi-lead-pencil btn-sm')
    //            ->route('commentaire.index', function(\App\Models\Commentaire $Commentaire) {
    //                 return $Commentaire->id;
    //            }),
    //     ];
    // }

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Commentaire Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($Commentaire) => $Commentaire->id === 1)
                ->hide(),
        ];
    }
    */
}
