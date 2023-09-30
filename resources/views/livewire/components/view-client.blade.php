<div wire:ignore.self class="modal fade" id="openModalView">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> INFORMATION LIEE A LA RESERVATION</h4>
                <button class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{$reservation->Client->User->image ?? ''}} " width="100%" height="100%" alt="">
                    </div>
                    <div class="col-lg-8">
                        <table class=" table table-sm">
                            <tbody>
                                <tr>
                                    <td>Nom Complet</td>
                                    <td>{{$reservation->Client->User->nom ?? ''}} 
                                        {{$reservation->Client->User->postnom ?? ''}} 
                                        {{$reservation->Client->User->prenom ?? ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date Heure</td>
                                    <td>{{$reservation->date_reservee ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Montant</td>
                                    <td>{{$reservation->montant ?? ''}} $</td>
                                </tr>
                                <tr>
                                    <td>Tarif/Heure</td>
                                    <td>{{$reservation->Espace->cout ?? ''}} $</td>
                                </tr>
                                <tr>
                                    <td>Date de soumission</td>
                                    <td>le {{ $reservation->created_at ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>{{$reservation->Espace->Type->designation ?? ''}}</td>
                                    <td>{{$reservation->Espace->designation ?? ''}}</td>
                                </tr>
                            </tbody>
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