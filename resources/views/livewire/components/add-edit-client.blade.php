<div wire:ignore.self class="modal fade" id="openModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> {{$role}} Un Nouveau Client</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateOrCreate" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="">Désignation</label>
                        <input type="text" class="form-control" wire:model="client.designation" placeholder="designation" aria-label="designation">
                    </div>
                    @error('client.designation')<span class="text-danger">{{$message}}</span>@enderror
                    <div>
                        @if ($action=="Createclient ")
                            <div class="form-group">
                                <label class="">Logo</label>
                                <input type="file" class="form-control" wire:model="client.logo" placeholder="logo" aria-label="logo">
                            </div>
                            @error('client.logo')<span class="text-danger">{{$message}}</span>@enderror
                        @endif
                        @error('client.logo')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="">Contact</label>
                        <input type="text" class="form-control" wire:model="client.contact" placeholder="Contact" aria-label="Contact">
                    </div>
                    @error('client.contact')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">E-mail</label>
                        <input type="mail" class="form-control" wire:model="client.email" placeholder="E-mail" aria-label="E-mail">
                    </div>
                    @error('client.email')<span class="text-danger">{{$message}}</span>@enderror
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