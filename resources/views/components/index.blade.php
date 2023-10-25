<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BASILE LODGE | HOTEL|BOOKING</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="{!! url('royal/img/favicon.ico') !!}" rel="icon">
        <link href="{!! url('royal/img/apple-favicon.png') !!}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

        <!-- Vendor CSS File -->
        <link href="{!! url('royal/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
        <link href="{!! url('royal/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
        <link href="{!! url('royal/vendor/animate/animate.min.css" rel="stylesheet') !!}">
        <link href="{!! url('royal/vendor/slick/slick.css" rel="stylesheet') !!}">
        <link href="{!! url('royal/vendor/slick/slick-theme.css" rel="stylesheet') !!}">
        <link href="{!! url('royal/vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css') !!}" rel="stylesheet" />
        <link rel="stylesheet" href="{!! url('template/css/vertical-layout-light/sweetalert.css') !!}">
        <!-- Main Stylesheet File -->
        <link href="{!! url('royal/css/hover-style.css') !!}" rel="stylesheet">
        <link href="{!! url('royal/css/style.css') !!}" rel="stylesheet">
        @livewireStyles
    </head>

    <body>
        <!-- Header Section Start -->
        <header id="header">
            <a href="" class="logo"><img src="{!! url('royal/img/logo.jpg') !!}" alt="logo"></a>
            <div class="phone"><i class="fa fa-user"></i><a href="{{route("login")}}" class="text-white"> Login</a></div>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
        </header>
        <!-- Header Section End -->
        
        <!-- Header Slider Start -->
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{!! url('royal/img/slider/header-slider-1.jpg') !!}" alt="HOTEL LODGE">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">BASILe LODGE</h1>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="{!! url('royal/img/slider/header-slider-2.jpg') !!}" alt="HOTEL LODGE">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">LA QUALITE C'EST NOUS</h1>
                    </div>
                </div>T

                <div class="carousel-item">
                    <img src="{!! url('royal/img/slider/header-slider-3.jpg') !!}" alt="HOTEL LODGE">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">PROFITEZ DE NOS MEILLEURS SERVICES</h1>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Search Section End -->
        
        <!-- Welcome Section Start -->
        <div id="welcome">
            <div class="container">
                <h3>BIENVENU A L'HOTEL LODGE</h3>
                <p> Nous sommes un hôtel situé à walungu, bukavu, sud kivu, RDC,Nous vous offrons plusieurs
                    services en toute sécurité . Chez nous le client est Roi.</p>
            </div>
        </div>
        <!-- Welcome Section End -->
        
        <!-- Amenities Section Start -->
        <div id="amenities" class="home-amenities">
            <div class="container">
                <div class="section-header">
                    <h2>VOICI NOS SERVICES</h2>
                    <p>
                        HEBERGEMENT, CANTINE, BAR, cuisine, SALLE DE FETE, salle de réunion, dépôt relais etc.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-2"></i>
                        <h3>Climatisseur</h3>
                        <p>Pour Une Temperature adaptée au Besoin du client</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-3"></i>
                        <h3>Bain</h3>
                        <p>Tout Est là </p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-4"></i>
                        <h3>Douche</h3>
                        <p>Restez toujours Propre </p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-6"></i>
                        <h3>Television</h3>
                        <p>Restez toujours informés et detendez-vous.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-7"></i>
                        <h3>WIFI</h3>
                        <p>Avec une connexion internet ilimitée et de haut debit</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-8"></i>
                        <h3>Telephone</h3>
                        <p>Communiquez Avec vos Proches sur cellulaire</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-9"></i>
                        <h3>Mini Bar</h3>
                        <p>Pour Vous divertir</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-10"></i>
                        <h3>Cuisine</h3>
                        <p>Pour une festivité assurée</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Amenities Section Start -->
        
        <!-- Room Section Start -->
        <livewire:reservation>

        {{-- <div id="amenities" class="home-amenities">
            <div class="container">
                <div class="section-header">
                    <h2>Room Booking</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="booking-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="bookingForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control bg-transparent" id="fname" placeholder="E.g. John" required="required" data-validation-required-message="Please enter first name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control bg-transparent" id="lname" placeholder="E.g. Sina" required="required" data-validation-required-message="Please enter last name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control bg-transparent" id="mobile" placeholder="E.g. +1 234 567 8900" required="required" data-validation-required-message="Please enter your mobile number" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="E.g. email@example.com" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="button"><button type="submit" id="bookingButton">Book Now</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Booking Section End -->
        
        <!-- Call Section Start -->
        {{-- <div id="call-us">
            <div class="container">
                <div class="section-header">
                    <h2>Assistance Vocale</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="tel:+243810000000">+243810000000</a>
                    </div>
                </div>
            </div>
        </div> --}}
        
        {{-- <div id="subscribe">
            <div class="container">
                <div class="section-header">
                    <h3>S'enregistrer sur notre Newslater</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="subscribe-form">
                            <form>
                                <input type="email" required="required" placeholder="Enter your email here" />
                                <button>submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Call Section End -->
        
        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="social">
                            <a href=""><li class="fa fa-instagram"></li></a>
                            <a href=""><li class="fa fa-twitter"></li></a>
                            <a href=""><li class="fa fa-facebook-f"></li></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>Copyright &#169; 2023 <a href="">contact@basile-lodge.com</a> Tout Droit Reservé.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Vendor JavaScript File -->
        @livewireScripts
        <script src="{!! url('royal/vendor/jquery/jquery.min.js') !!}"></script>
        <script src="{!! url('royal/vendor/jquery/jquery-migrate.min.js') !!}"></script>
        <script src="{!! url('royal/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
        <script src="{!! url('template/js/alerts.js') !!}"></script>
        <script src="{!! url('template/js/cdn.min.js') !!}"></script>
        <script src="{!! url('template/js/swetalert-modal.js') !!}"></script>
        <script src="{!! url('royal/vendor/easing/easing.min.js') !!}"></script>
        <script src="{!! url('royal/vendor/stickyjs/sticky.js') !!}"></script>
        <script src="{!! url('royal/vendor/superfish/hoverIntent.js') !!}"></script>
        <script src="{!! url('royal/vendor/superfish/superfish.min.js') !!}"></script>
        <script src="{!! url('template/vendors/js/vendor.bundle.base.js')!!}"></script>
        <script src="{!! url('royal/vendor/wow/wow.min.js') !!}"></script>
        <script src="{!! url('royal/vendor/slick/slick.min.js') !!}"></script>
        <script src="{!! url('royal/vendor/tempusdominus/js/moment.min.js') !!}"></script>
        <script src="{!! url('royal/vendor/tempusdominus/js/moment-timezone.min.js') !!}"></script>
        <script src="{!! url('royal/vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
        
        <!-- Booking Javascript File -->
        <script src="{!! url('royal/js/booking.js') !!}"></script>
        <script src="{!! url('royal/js/jqBootstrapValidation.min.js') !!}"></script>
  
        <!-- Main Javascript File -->
        <script src="{!! url('royal/js/main.js') !!}"></script>
        @show

    </body>
</html>