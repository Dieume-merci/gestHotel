<div>
    <div class="row">
        <div class="col-lg-8">
            <livewire:home.type-table>
        </div>
        <div class="card-body mt-5">
            
        <div>Ajouter Un Type</div>
            <form wire:submit.prevent="Create" class="form-group">
                @csrf
                <div class="form-group">
                    <label class="">Désignation</label>
                    <input type="text" class="form-control" wire:model="type.designation" placeholder="designation" aria-label="designation">
                </div>
                @error('type.designation')<span class="text-danger">{{$message}}</span>@enderror
                <div class="mt-2">
                    <button class="btn btn-inverse-success col-lg-12 btn-sm btn-rounded typcn typcn-thumbs-up"> Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    @include('livewire.components.editer-type')
</div>
