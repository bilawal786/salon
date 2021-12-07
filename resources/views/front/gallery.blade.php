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
                @foreach($gallery as $gal)
                <li class="makeup_fl_masonry_in">
                    <a href="{{asset($gal->image)}}">
                        <img src="{{asset($gal->image)}}" alt="" />
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->

@endsection

