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
                            <img src="{{$agent->image ?? ''}}" class="rounded" style="width: 100%" alt="image">
                            <caption>
                                <h4>
                                    {{$agent->nom ?? ''}} 
                                    {{$agent->postnom ?? ''}} 
                                    {{$agent->prenom ?? ''}} 
                                </h4>
                            </caption>
                        </div>
                        <hr width="50%">
                        <table class="table table-bordered">
                            <tr>
                                <td>Cv</td>
                                <td class="d-flex flex-row-reverse p-3">
                                    <a href="{{$agent->document ?? ''}}" target="_blank">
                                        <img src="/template/files/personals/documents/__document.png" class="rounded" style="width: 100%" alt="image">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Contrat</td>
                                <td class="d-flex flex-row-reverse p-3">
                                    <a href="{{$agent->Convention->close ?? ''}}" target="_blank">
                                        <img src="/template/files/personals/documents/__close.png" class="rounded" style="width: 100%" alt="image">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-7">
                        <table class="table">
                            <tr>
                                <th>Domaine</th>
                                <td>{{$agent->Domaines->designation ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Civilite</th>
                                <td>{{$agent->civilite ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Lieu d'Affectation</th>
                                <td>{{$agent->AgentAffecterContrat->Contrat->Entreprises->designation ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>D. d'Affectation</th>
                                <td>{{$agent->AgentAffecterContrat->created_at ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>D. Debut Contrat</th>
                                <td>{{$agent->Convention->date_debut ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>D. Fin Contrat</th>
                                <td>{{$agent->Convention->date_fin ?? ''}}</td>
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