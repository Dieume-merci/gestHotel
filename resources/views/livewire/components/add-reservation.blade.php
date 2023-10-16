<div wire:ignore.self class="modal fade" id="openModalReservation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Information d'un agent</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="" class="form-group">
                    @csrf
                    <div class="form-group">
                        <label class="">Date debut</label>
                        <input type="datetime-local" class="form-control" wire:model="reservation.date_reservee">
                    </div>
                    @error('reservation.date_reservee')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Moment d'occupation</label>
                        <input type="number" step="any" class="form-control" wire:model="reservation.heure">
                    </div>
                    @error('reservation.heure')<span class="text-danger">{{$message}}</span>@enderror
                    <div class="form-group">
                        <label class="">Montant à Payer</label>
                        <input type="text" class="form-control" @readonly(true) wire:model="reservation.montant" placeholder="montant" aria-label="montant">
                    </div>
                    @error('reservation.montant')<span class="text-danger">{{$message}}</span>@enderror
                    <span class="text-danger pull-rigth">{{$fin}}</span>
                    <div class="mt-2">
                        <button class="btn btn-outline-success col-lg-12 btn-sm btn-rounded typcn typcn-thumbs-up"> Reservez</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" data-dismiss="modal"> Fermer</button>
            </div>
        </div>
    </div>
</div>