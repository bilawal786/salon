@extends('layouts.front')
@section('section')

<!-- CONTENT WRAP -->
<div class="makeup_fl_content_wrap">


    <!-- FOTORAMA -->
    <div class="makeup_fl_fotorama">
        <div class="fotorama" data-nav="thumbs"  data-autoplay="4000" data-loop="true" data-keyboard="true"  data-arrows="true" data-click="true" data-swipe="true" data-stopautoplayontouch="false" data-transition="slide" data-fit="cover" data-width="100%">
            <a href="{{asset($content->slider1)}}">
                <img src="{{asset($content->slider1)}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset($content->slider2)}}">
                <img src="{{asset($content->slider2)}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset($content->slider3)}}">
                <img src="{{asset($content->slider3)}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset($content->slider4)}}">
                <img src="{{asset($content->slider4)}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset($content->slider5)}}">
                <img src="{{asset($content->slider5)}}" width="144" height="96" alt="" />
            </a>
        </div>
    </div>
    <!-- /FOTORAMA -->

    <!-- TESTIMONIALS -->
    <div class="makeup_fl_content_testimonials">
        <div class="testimonials">
            <div class="quote"><i class="xcon-quote-right-alt"></i></div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <p>{{$content->review1}}</p>
                    <br />
                    <span>{{$content->rgive1}}</span>
                </div>
                <div class="item">
                    <p>{{$content->review2}}</p>
                    <br />
                    <span>{{$content->rgive2}}</span>
                </div>
                <div class="item">
                    <p>{{$content->review3}}</p>
                    <br />
                    <span>{{$content->rgive3}}</span>
                </div>
            </div>
            <div class="prev_next_btn">
                <a href="#" class="prev"><i class="xcon-angle-left"></i></a>
                <a href="#" class="next"><i class="xcon-angle-right"></i></a>
            </div>
        </div>

    </div>
    <!-- /TESTIMONIALS -->

    <!-- PACKAGE LIST -->
    <div class="makeup_fl_package_list makeup_fl_masonry">

        <!-- PACKAGE LIST #1 -->
        <div class="makeup_fl_package_list_in makeup_fl_masonry_in">
            <div class="pckg_img">
                <img src="{{asset($content->o1image)}}" alt="" />
            </div>
            <div class="pckg_info">
                <div class="title_holder">
                    <h3>{{$content->o1title}}</h3>
                    <span>Durée : {{$content->o1duration}}</span>
                </div>
                <div class="price_list">
                    <ul>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o1d1}}</span>
                                <span class="span2">{{$content->o1p1}} €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o1d2}}</span>
                                <span class="span2">{{$content->o1p2}} €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o1d3}}</span>
                                <span class="span2">{{$content->o1p3}} €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o1d4}}</span>
                                <span class="span2">{{$content->o1p4}} €</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="total"><span>Total: {{$content->o1p1 + $content->o1p2 +  $content->o1p3 +  $content->o1p4}} €</span></div>
                <div class="footer">
                    <div class="footer_btn">
                        <a href="{{route('modal.booking')}}" class="ajax-popup-link">Réservation en ligne</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PACKAGE LIST #1 -->


        <!-- PACKAGE LIST #2 -->
        <div class="makeup_fl_package_list_in makeup_fl_masonry_in">
            <div class="pckg_img">
                <img src="{{asset($content->o2image)}}" alt="" />
            </div>
            <div class="pckg_info">
                <div class="title_holder">
                    <h3>{{$content->o2title}}</h3>
                    <span>Durée : {{$content->o2duration}}</span>
                </div>
                <div class="price_list">
                    <ul>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o2d1}}</span>
                                <span class="span2">{{$content->o2p1}} €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o2d2}}</span>
                                <span class="span2">{{$content->o2p2}} €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o2d3}}</span>
                                <span class="span2">{{$content->o2p3}} €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">{{$content->o2d4}}</span>
                                <span class="span2">{{$content->o2p4}} €</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="total"><span>Total: {{$content->o2p1 + $content->o2p2 +  $content->o2p3 +  $content->o2p4}} €</span></div>
                <div class="footer">
                    <div class="footer_btn">
                        <a href="{{route('modal.booking')}}" class="ajax-popup-link">Réservation en ligne</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PACKAGE LIST #2 -->

    </div>
    <!-- /PACKAGE LIST -->

</div>
<!-- /CONTENT WRAP -->

@endsection

