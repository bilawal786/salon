@extends('layouts.front')
@section('section')


    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <div class="makeup_fl_title_holder">
            <div class="line"></div>
            <span>Services incroyables</span>
        </div>
        <div class="clearfix"></div>

        <!-- SERVICES -->
        <div class="makeup_fl_services makeup_fl_masonry">

            <!-- SERVICE #1 -->
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset('front/img/services/1.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                    <div class="price"><span>37.00 €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="#">Maquillage de mariée</a></h3>
                    <span>Durée : 25 - 35 min</span>
                </div>
            </div>
            <!-- /SERVICE #1 -->

            <!-- SERVICE #2 -->
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset('front/img/services/2.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                    <div class="price"><span>39.00 €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="#">Maquillage commercial</a></h3>
                    <span>Durée : 25 - 35 min</span>
                </div>
            </div>
            <!-- /SERVICE #2 -->

            <!-- SERVICE #3 -->
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset('front/img/services/3.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                    <div class="price"><span>27.00 €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="#">Maquillage De Fête</a></h3>
                    <span>Durée : 25 - 35 min</span>
                </div>
            </div>
            <!-- /SERVICE #3 -->

            <!-- SERVICE #4 -->
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset('front/img/services/4.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                    <div class="price"><span>25.00 €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="#">Maquillage théâtral</a></h3>
                    <span>Durée : 25 - 35 min</span>
                </div>
            </div>
            <!-- /SERVICE #4 -->

            <!-- SERVICE #5 -->
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset('front/img/services/5.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                    <div class="price"><span>32.00 €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="#">Maquillage De Télévision</a></h3>
                    <span>Durée : 25 - 35 min</span>
                </div>
            </div>
            <!-- /SERVICE #5 -->

            <!-- SERVICE #6 -->
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset('front/img/services/6.jpg')}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                    <div class="price"><span>28.00 €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="#">Maquillage De Film</a></h3>
                    <span>Durée : 25 - 35 min</span>
                </div>
            </div>
            <!-- /SERVICE #6 -->

        </div>
        <!-- /SERVICES -->

        <!-- PAGINATION -->
        <div class="makeup_fl_pagination lessmargin">
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

