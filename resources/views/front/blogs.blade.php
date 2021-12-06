@extends('layouts.front')
@section('section')

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <!-- BLOG #1 -->
            <div class="makeup_fl_blog_list">
                <div class="common_img">
                    <img src="{{asset('front/img/blog/1.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                </div>
                <div class="common_full_info">
                    <div class="title_holder">
                        <h3><a href="#">Dernières tendances maquillage pour les mariages</a></h3>
                        <span><a href="#">Mode</a> / <a href="#">Feb 17, 2017</a></span>
                    </div>
                    <div class="common_info">
                        <p>Le secret du mouvement et du volume époustouflant de ce look de cheveux longs réside uniquement dans le style. Coupé en couches douces et effilé sur les côtés, toute l'action est séchée au sèche-cheveux et repassée à chaud dans les longues tresses, mèche par mèche. </p>
                    </div>
                    <div class="makeup_fl_btn">
                        <a href="#">Lire la suite</a>
                    </div>
                </div>
            </div>
            <!-- /BLOG #1 -->

            <!-- BLOG #2 -->
            <div class="makeup_fl_blog_list">
                <div class="common_img">
                    <img src="{{asset('front/img/blog/2.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                </div>
                <div class="common_full_info">
                    <div class="title_holder">
                        <h3><a href="#">Dernières tendances maquillage pour le théâtre</a></h3>
                        <span><a href="#">Mode</a> / <a href="#">Feb 17, 2017</a></span>
                    </div>
                    <div class="common_info">
                        <p>Le secret du mouvement et du volume époustouflant de ce look de cheveux longs réside uniquement dans le style. Coupé en couches douces et effilé sur les côtés, toute l'action est séchée au sèche-cheveux et repassée à chaud dans les longues tresses, mèche par mèche. </p>
                    </div>
                    <div class="makeup_fl_btn">
                        <a href="#">Lire la suite</a>
                    </div>
                </div>
            </div>
            <!-- /BLOG #2 -->

        </div>
        <!-- /COMMON -->

        <!-- PAGINATION -->
        <div class="makeup_fl_pagination">
            <div class="makeup_fl_pagination_in">
                <div class="pg_number">
                    <ul>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="xcon-angle-right"></i></a></li>
                    </ul>
                </div>
                <div class="pages">
                    <span>Affichage de la page 1 of 2</span>
                </div>
            </div>
        </div>
        <!-- /PAGINATION -->


    </div>
    <!-- /CONTENT WRAP -->

@endsection

