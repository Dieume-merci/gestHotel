<div>
    <div id="rooms">
        <div class="container">
            <div class="section-header">
                <h2>Nos Produits</h2>
                <p>
                    Reservez Un Espace et Gagner 12% Pourcents de Reduction
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
                                    {{-- <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s)</li>
                                    </ul> --}}
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
                                <div><img src="{!! url('royal/img/room-slider/room-1.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-2.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-3.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-4.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-5.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-6.jpg') !!}"></div>
                            </div>
                            <div class="port-slider-nav">
                                <div><img src="{!! url('royal/img/room-slider/room-1.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-2.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-3.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-4.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-5.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-6.jpg') !!}"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <div><img src="{!! url('royal/img/room-slider/room-1.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-2.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-3.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-4.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-5.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-6.jpg') !!}"></div>
                            </div>
                            <div class="port-slider-nav">
                                <div><img src="{!! url('royal/img/room-slider/room-1.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-2.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-3.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-4.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-5.jpg') !!}"></div>
                                <div><img src="{!! url('royal/img/room-slider/room-6.jpg') !!}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.components.add-reservation')
</div>
