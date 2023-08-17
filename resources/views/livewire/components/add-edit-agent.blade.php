<div wire:ignore.self class="modal fade" id="openModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> {{$role}} Information d'un agent</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateOrCreate" class="form-group">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Nom</span>
                        </div>
                        <input type="text" class="form-control" wire:model="agent.nom" placeholder="Nom" aria-label="Nom">
                    </div>
                    @error('agent.nom')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">PostNom</span>
                        </div>
                        <input type="text" class="form-control" wire:model="agent.postnom" placeholder="PostNom" aria-label="PostNom">
                    </div>
                    @error('agent.postnom')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Prenom</span>
                        </div>
                        <input type="text" class="form-control" wire:model="agent.prenom" placeholder="Prenom" aria-label="Prenom">
                    </div>
                    @error('agent.prenom')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Civilité</span>
                        </div>
                        <select class="form-control-sm form-control" wire:model="agent.civilite">
                            <option value="">Selectionner Une Civilité</option>
                            <option value="Feminin">Madame</option>
                            <option value="Masculin">Monsieur</option>
                        </select>
                    </div>
                    @error('agent.civilite')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Contact</span>
                        </div>
                        <input type="text" class="form-control" wire:model="agent.contact" placeholder="Contact" aria-label="Contact">
                    </div>
                    @error('agent.contact')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">E-mail</span>
                        </div>
                        <input type="mail" class="form-control" wire:model="agent.email" placeholder="E-mail" aria-label="E-mail">
                    </div>
                    @error('agent.email')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Domaine</span>
                        </div>
                        <select class="form-control-sm form-control" wire:model="agent.domaine_id">
                            <option value="">Selectionner Une Civilité</option>*
                            @foreach ($domaines as $domaine)
                                <option value="{{$domaine->id}}">{{$domaine->designation}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('agent.domaine_id')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Fonction</span>
                        </div>
                        <input type="text" class="form-control" wire:model="agent.fonction" placeholder="Fonction" aria-label="Fonction">
                    </div>
                    @error('agent.fonction')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="mt-2">
                        <button class="btn btn-inverse-success col-lg-12 btn-sm btn-rounded typcn typcn-thumbs-up"> {{$role}}</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" data-dismiss="modal"> Fermer</button>
            </div>
        </div>
    </div>
</div>