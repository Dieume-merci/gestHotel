<div wire:ignore.self class="modal fade" id="openModalContrat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> Contracter un Marché</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateOrCreate" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                          <label class="">Désignation</label>
                          <input type="text" class="form-control" list="client" wire:model="contrat.client_id" placeholder="Designation du Client" aria-label="close">
                        <datalist id="client">
                            @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->designation}}</option>
                            @endforeach
                        </datalist>
                    </div>
                    @error('contrat.client_id')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Close</label>
                        <input type="file" class="form-control" wire:model="contrat.close" placeholder="close" aria-label="close">
                    </div>
                    @error('contrat.close')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Contexte</label>
                        <input type="text" class="form-control" wire:model="contrat.contexte" placeholder="contexte" aria-label="contexte">
                    </div>
                    @error('contrat.contexte')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">cout</label>
                        <input type="text" class="form-control" wire:model="contrat.cout" placeholder="cout" aria-label="cout">
                    </div>
                    @error('contrat.cout')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Date Debut Contrat</label>
                        <input type="date" class="form-control" wire:model="contrat.date_debut" placeholder="date_debut" aria-label="date_debut">
                    </div>
                    @error('contrat.date_debut')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Date Fin Contrat</label>
                        <input type="date" class="form-control" wire:model="contrat.date_fin" placeholder="date_fin" aria-label="date_fin">
                    </div>
                    @error('contrat.date_fin')<span class="text-danger">{{$message}}</span>@enderror
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