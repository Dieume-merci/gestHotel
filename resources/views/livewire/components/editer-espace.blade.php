<div wire:ignore.self class="modal fade" id="openModal">
    <div class="modal-dialog">
        <div class="modal-content modal-sm">
            <div class="modal-header">
                <h4 class="modal-title text-center">Information d'un agent</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="edit" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="">Désignation</label>
                        <input type="text" class="form-control" wire:model="espace.designation" placeholder="designation" aria-label="designation">
                    </div>
                    @error('espace.designation')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Coût</label>
                        <input type="text" class="form-control" wire:model="espace.cout" placeholder="designation" aria-label="designation">
                    </div>
                    @error('espace.cout')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Type</label>
                        <select class="form-control" wire:model="espace.type_id" placeholder="designation" aria-label="Type d'Espace">
                            <option value="">Selectionner Un Type</option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->designation}}</option>  
                            @endforeach
                        </select>
                    </div>
                    @error('espace.type_id')<span class="text-danger">{{$message}}</span>@enderror
                    {{-- <div class="form-group">
                        <label class="">Image</label>
                        <input type="file" class="form-control" wire:model="espace.image" placeholder="designation" aria-label="designation">
                    </div>
                    @error('espace.image')<span class="text-danger">{{$message}}</span>@enderror --}}
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