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
                <img src="{{asset($about->image)}}" alt="" />
                <div class="overlay"></div>
            </div>
            <div class="common_full_info">
                <div class="common_info">
                    <p>{!! $about->description !!} </p>
                </div>
            </div>
        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->



@endsection

