@extends('layouts.front')
@section('section')

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>À propos de notre salon</span>
            </div>
            <div class="common_img">
                <img src="{{asset('front/img/about/about_img.jpg')}}" alt="" />
                <div class="overlay"></div>
            </div>
            <div class="common_full_info">
                <div class="common_info">
                    <p>Le secret du mouvement et du volume époustouflant de ce look de cheveux longs réside uniquement dans le style. Coupé en couches douces et effilé sur les côtés, toute l'action est séchée au sèche-cheveux et repassée à chaud dans les longues tresses, mèche par mèche. </p>
                </div>
            </div>
            <!-- OUR TEAM -->
            <div class="makeup_fl_about_team">
                <div class="title_holder">
                    <h3>Notre équipe dédiée</h3>
                </div>
                <div class="team_holder makeup_fl_masonry">

                    <!-- SPECIALIST #1 -->
                    <div class="specialist makeup_fl_masonry_in">
                        <div class="spc_img">
                            <img src="{{asset('front/img/about/1.jpg')}}" alt="" />
                            <div class="overlay"></div>
                        </div>
                        <div class="spc_name">
                            <h3>Barbara Sahakian</h3>
                            <span>Maquilleur</span>
                        </div>
                        <div class="makeup_fl_social_icons">
                            <ul>
                                <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /SPECIALIST #1 -->

                    <!-- SPECIALIST #2 -->
                    <div class="specialist makeup_fl_masonry_in">
                        <div class="spc_img">
                            <img src="{{asset('front/img/about/2.jpg')}}" alt="" />
                            <div class="overlay"></div>
                        </div>
                        <div class="spc_name">
                            <h3>Nadira Faber</h3>
                            <span>Styliste</span>
                        </div>
                        <div class="makeup_fl_social_icons">
                            <ul>
                                <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                <li><a href="#"><i class="xcon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /SPECIALIST #2 -->

                    <!-- SPECIALIST #3 -->
                    <div class="specialist makeup_fl_masonry_in">
                        <div class="spc_img">
                            <img src="{{asset('front/img/about/3.jpg')}}" alt="" />
                            <div class="overlay"></div>
                        </div>
                        <div class="spc_name">
                            <h3>Julie Lee</h3>
                            <span>Styliste</span>
                        </div>
                        <div class="makeup_fl_social_icons">
                            <ul>
                                <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                <li><a href="#"><i class="xcon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /SPECIALIST #3 -->

                    <!-- SPECIALIST #4 -->
                    <div class="specialist makeup_fl_masonry_in">
                        <div class="spc_img">
                            <img src="{{asset('front/img/about/4.jpg')}}" alt="" />
                            <div class="overlay"></div>
                        </div>
                        <div class="spc_name">
                            <h3>Rosa Emman</h3>
                            <span>Styliste</span>
                        </div>
                        <div class="makeup_fl_social_icons">
                            <ul>
                                <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                <li><a href="#"><i class="xcon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /SPECIALIST #4 -->

                </div>
            </div>
            <!-- /OUR TEAM -->
        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->



@endsection

