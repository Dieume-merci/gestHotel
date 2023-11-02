<div wire:ignore.self class="modal fade" id="openModalcommentaire">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Laissez Nous Un Commentaire</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <input type="text" value="{{Auth::user()->email}}" @readonly(true) class="form-control">
                <form wire:submit.prevent="create" class="form-group">
                    @csrf
                    <div class="form-group">
                        <label class="">Ecrivez Votre Message</label>
                        <textarea class="form-control" wire:model="commentaire.contenu" placeholder="Commentaire" aria-label="montant" id="" cols="30" rows="10"></textarea>
                    </div>
                    @error('commentaire.contenu')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="mt-2">
                        <button class="btn btn-outline-success col-lg-12 btn-sm btn-rounded typcn typcn-thumbs-up"> Commenter</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" data-dismiss="modal"> Fermer</button>
            </div>
        </div>
    </div>
</div>