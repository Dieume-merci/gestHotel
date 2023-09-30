<div>
    <div class="row">
        <div class="col-lg-8">
            <livewire:home.espace-table>
        </div>
        <div class="col-lg-4">
            <div class="card-body mt-2">
                <form wire:submit.prevent="Create" class="form-group" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <label class="">Image</label>
                        <input type="file" class="form-control" wire:model="espace.image" placeholder="designation" aria-label="designation">
                    </div>
                    @error('espace.image')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="mt-2">
                        <button class="btn btn-inverse-success col-lg-12 btn-sm btn-rounded typcn typcn-thumbs-up"> Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('livewire.components.editer-espace')
</div>