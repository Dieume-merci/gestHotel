<div wire:ignore.self class="modal fade" id="openModalView">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> Visualiser Information d'un Agent</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-5">
                        <div class="text-center">
                            {{-- <img src="{{$client->logo ?? ''}}" class="rounded" width="100%" alt="image"> --}}
                        </div>
                        <hr width="50%">
                        {{-- {{$contrat}} --}}
                    </div>
                    <div class="col-7">
                        <table class="table">
                            <tr>
                                <th>Designation</th>
                                <td>{{$client->designation ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Civilite</th>
                                <td>{{$client->email ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Lieu d'Affectation</th>
                                <td>{{$client->contact ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Autres Modifications</th>
                                <td><button class="btn btn-outline-link btn-sm mdi mdi-database-plus" data-target="#addconvention" data-toggle="modal"> {{$role}}</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" data-dismiss="modal"> Fermer</button>
            </div>
        </div>
    </div>
</div>
<div wire:ignore.self class="modal fade bg-white" id="addconvention">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> {{$role}} Information d'un Agent</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateOrCreate" class="form-group">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Date debut</span>
                        </div>
                        <input type="date" class="form-control" wire:model="convention.date_debut" placeholder="Date debut" aria-label="Date debut">
                    </div>
                    @error('convention.date_debut')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Date Fin</span>
                        </div>
                        <input type="date" class="form-control" wire:model="convention.date_fin" placeholder="Date Fin" aria-label="Date Fin">
                    </div>
                    @error('convention.date_fin')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Salaire</span>
                        </div>
                        <input type="number" step="any" class="form-control" wire:model="convention.salaire" placeholder="salaire" aria-label="salaire">
                    </div>
                    @error('convention.salaire')<span class="text-danger">{{$message}}</span>@enderror
                    {{-- <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Close</span>
                        </div>
                        <input type="file" class="form-control" wire:model="convention.close" placeholder="close" aria-label="close">
                    </div>
                    @error('convention.close')<span class="text-danger">{{$message}}</span>@enderror --}}
                    <div class="mt-2">
                        <button class="btn btn-inverse-success col-lg-12 btn-sm btn-rounded typcn typcn-thumbs-up"> Modifier</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" data-dismiss="modal"> Fermer</button>
            </div>
        </div>
    </div>
</div>