<div>
    <div id="rooms">
        <div class="container">
            <div class="section-header">
                <h2>Voici nos services</h2>
                <p>
                    concernant les espaces et faites vos réservations des espaces et gagnez
                    12% de réduction. Cliquez sur réservez pour effectuer la réservation.

                </p>
            </div>
            <div class="row">
                @foreach ($espaces as $espace)
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="room-img">
                                    <div class="box12">
                                        <img src="{!! url($espace->image) !!}">
                                        <div class="box-content">
                                            <h3 class="title">{{$espace->Type->designation}} {{$espace->designation}}</h3>
                                            <ul class="icon">
                                                <li><a data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3><a data-toggle="modal" data-target="#modal-id">{{$espace->Type->designation}} {{$espace->designation}}</a></h3>
                                    <p>{{$espace->description}}</p>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-rate">
                                    <h3>Pour</h3>
                                    <h1>{{$espace->cout}}$/H</h1>
                                    <a wire:click.prevent="setreservation({{$espace->id}})">Reservez</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="modal-id" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="port-slider">
                                @foreach ($espaces as $espace)
                                    <div><img src="{!! url($espace->image) !!}"></div>
                                 @endforeach
                            </div>
                            <div class="port-slider-nav">
                                @foreach ($espaces as $espace)
                                    <div><img src="{!! url($espace->image) !!}"></div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.components.add-reservation')
</div>
