<div wire:ignore.self class="modal fade" id="modifier-type"  data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> Modifier Un Type</h4>
                <button class="close" wire:click="quitteer">X</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="edit" class="form-group">
                    @csrf
                    <div class="form-group">
                        <label class="">Désignation</label>
                        <input type="text" class="form-control" wire:model="type.designation" placeholder="designation" aria-label="designation">
                    </div>
                    @error('type.designation')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="mt-2">
                        <i wire:loading="" class="spinner-border spinner-border-sm pr-2" role="status"></i>
                         <button class="btn btn-inverse-success col-lg-12 btn-sm btn-rounded typcn typcn-thumbs-up"><i wire:loading.remove="" class="bi bi-save pr-2"></i>Modifier</button> 
                        {{-- <button wire:loading=""></button>  --}}
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" wire:click="quitteer"> Fermer</button>
            </div>
        </div>
    </div>
</div>