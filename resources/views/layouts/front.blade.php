<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php
$gs = \App\GeneralSettings::find(1);
?>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="name of web site">
    <meta name="author" content="FriendsLaboratory">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{$gs->sitename}}</title>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- STYLES -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/fontello.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/skeleton.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/base.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/fotorama.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/animate.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/datepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/timepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
<!--[if lt IE 9]> <script type="text/javascript" src="{{asset('front/js/modernizr.custom.js')}}"></script> <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- /STYLES -->
    <style>

        body{
            font-family: 'Josefin Sans', Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            letter-spacing: 0.5px;
            font-weight: 400;
            color: #999;

            background-image:url({{asset($gs->mainimage)}});
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
        button{
            text-decoration: none;
            text-transform: uppercase;
            color: #bbb;
            letter-spacing: 1px;
            padding: 11px 36px;
            background: #371352;
            font-size: 12px;
            border: 2px solid transparent;
            display: inline-block;
        }
        input[type="password"]{
            width: 100% !important;
        }
    </style>
    @yield('style')
</head>

<body>


<!-- WRAPPER ALL -->
<div class="makeup_fl_wrapper_all">

    <!-- CONTENT -->
    <div class="makeup_fl_content">
        <div class="container">



            <!-- VERTICAL MENU -->
            <div class="makeup_fl_ver_menu sticky_sidebar">
                <div class="vertical_menu">
                    <div class="makeup_fl_ver_menu_in">
                        <div class="makeup_fl_logo">
                            <img src="{{asset($gs->logo)}}" alt="" />
                        </div>
                        <div class="makeup_fl_nav_list">
                            <ul>
                                <li><a href="{{route('front.index')}}"><span>Accueil</span></a></li>
                                <li><a href="{{route('front.about')}}"><span>À propos de nous</span></a></li>
                                <li><a href="{{route('front.services')}}"><span>Nos services</span></a></li>
                                <li><a href="{{route('front.products')}}"><span>Nos produits</span></a></li>
                                <li><a href="{{route('front.gallery')}}"><span>Galerie</span></a></li>
                                <li><a href="{{route('front.blogs')}}"><span>Notre blog</span></a></li>
                                <li><a href="{{route('cartitems')}}"><span>Panier</span></a></li>
                                @guest
                                    <li><a href="{{route('login')}}"><span>Connexion</span></a></li>
                                @endguest
                                @auth
                                    <li><a href=""><span>{{Auth::user()->fname}} {{Auth::user()->lname}}</span></a></li>
                                @endauth
                            </ul>
                        </div>
                        <div class="makeup_fl_booking_btn">
                            <div class="btn_s_a"><a href="{{route('modal.address')}}" class="ajax-popup-link"><i class="xcon-home"></i></a></div>
                            <div class="btn_b"><a href="{{route('front.contact')}}" class="ajax-popup-link">Contact</a></div>
                            <div class="btn_s_b"><a href="{{route('modal.opening')}}" class="ajax-popup-link"><i class="xcon-clock-1"></i></a></div>
                        </div>
                        <div class="makeup_fl_social_icons">
                            <ul>
                                <li><a href="{{$gs->facebook}}"><i class="xcon-facebook"></i></a></li>
                                <li><a href="{{$gs->twitter}}"><i class="xcon-twitter"></i></a></li>
                                <li><a href="{{$gs->instagram}}"><i class="xcon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="makeup_fl_cright">
                            <span>Droits d'auteur 2021. Conception et développement par <a href="https://ikaedigital.com/">IKAE DIGITAL</a></span>
                        </div>
                        <div class="makeup_fl_totop_wrapper">
                            <div class="rotating"></div>
                            <a href="#" class="totop"><i class="xcon-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /VERTICAL MENU -->


            <!-- CONTENT IN -->
            <div class="makeup_fl_content_in sticky_sidebar">
                <div class="makeup_fl_content_in_qq">

                    <!-- HEADER -->
                    <div class="makeup_fl_header">
                        <div class="makeup_fl_logo">
                            <img src="{{asset($gs->logo)}}" alt="" />
                        </div>
                        <div class="makeup_fl_header_trigger">
                            <a href="#"></a>
                            <span class="one"></span>
                            <span class="two"></span>
                            <span class="three"></span>
                        </div>
                        <div class="makeup_fl_booking_btn">
                            <div class="btn_s_a"><a href="{{route('modal.address')}}" class="ajax-popup-link"><i class="xcon-home"></i></a></div>
                            <div class="btn_b"><a href="{{route('modal.booking')}}" class="ajax-popup-link">Réservation en ligne</a></div>
                            <div class="btn_s_b"><a href="{{route('modal.opening')}}" class="ajax-popup-link"><i class="xcon-clock-1"></i></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="makeup_fl_header_nav_list">
                            <ul>
                                <li class="mversion">
                                    <div class="makeup_fl_booking_btn">
                                        <div class="btn_s_a"><a href="{{route('modal.address')}}" class="ajax-popup-link"><i class="xcon-home"></i></a></div>
                                        <div class="btn_b"><a href="{{route('front.contact')}}" class="ajax-popup-link">Contact</a></div>
                                        <div class="btn_s_b"><a href="{{route('modal.opening')}}" class="ajax-popup-link"><i class="xcon-clock-1"></i></a></div>
                                    </div>
                                </li>
                                <li><a href="{{route('front.index')}}"><span>Accueil</span><br /><span class="row"></span></a></li>
                                <li><a href="{{route('front.about')}}"><span>À propos de nous</span></a></li>
                                <li><a href="{{route('front.services')}}"><span>Nos services</span></a></li>
                                <li><a href="{{route('front.products')}}"><span>Nos produits</span></a></li>
                                <li><a href="{{route('front.gallery')}}"><span>Galerie</span></a></li>
                                <li><a href="{{route('front.blogs')}}"><span>Notre blog</span></a></li>
                                <li><a href="{{route('cartitems')}}"><span>Panier</span></a></li>
                                @guest
                                <li><a href="{{route('login')}}"><span>Connexion</span></a></li>
                                @endguest
                                @auth
                                    <li><a href=""><span>{{Auth::user()->fname}} {{Auth::user()->lname}}</span></a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                    <!-- /HEADER -->

@yield('section')



                <!-- FOOTER -->
                    <div class="makeup_fl_footer">
                        <div class="social_icons">
                            <ul>
                                <li><a href="{{$gs->facebook}}"><i class="xcon-facebook"></i></a></li>
                                <li><a href="{{$gs->twitter}}"><i class="xcon-twitter"></i></a></li>
                                <li><a href="{{$gs->instagram}}"><i class="xcon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="cright">
                            <span>&copy; Droits d'auteur 2021. Conception et développement par <a href="https://ikaedigital.com/">IKAE DIGITAL</a></span>
                        </div>
                        <div class="makeup_fl_totop_wrapper">
                            <div class="rotating"></div>
                            <a href="#" class="totop"><i class="xcon-angle-up"></i></a>
                        </div>
                    </div>
                    <!-- /FOOTER -->

                </div>
            </div>
            <!-- /CONTENT IN -->

        </div>
    </div>
    <!-- /CONTENT -->

</div>
<!-- /WRAPPER ALL -->



<!-- SCRIPTS -->
<script type="text/javascript" src="{{asset('front/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/plugins.js')}}"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="{{asset('front/js/ie8.js')}}"></script> <![endif]-->
<script type="text/javascript" src="{{asset('front/js/init.js')}}"></script>
<!-- /SCRIPTS -->
@yield('script')
</body>
</html>
