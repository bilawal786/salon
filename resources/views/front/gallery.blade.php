@extends('layouts.front')
@section('section')

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>Notre galerie de maquillage</span>
            </div>
            <div class="clearfix"></div>
            <ul class="makeup_fl_gallery_list gallery makeup_fl_masonry">
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb1.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb1.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb2.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb2.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb3.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb3.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb4.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb4.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb5.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb5.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb6.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb6.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb7.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb7.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb9.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb9.jpg')}}" alt="" />
                    </a>
                </li>
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset('front/img/gallery/thumb10.jpg')}}">
                        <img src="{{asset('front/img/gallery/thumb10.jpg')}}" alt="" />
                    </a>
                </li>
            </ul>
        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->

@endsection

