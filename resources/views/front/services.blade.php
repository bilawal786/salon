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
            @foreach($services as $service)
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset($service->image)}}" alt="" />
                    <a href="#"><div class="overlay"></div></a>
                    <div class="price"><span>{{$service->price}} €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="#">{{$service->title}}</a></h3>
                    <span>Durée : {{$service->duration}}</span>
                </div>
            </div>
            @endforeach
            <!-- /SERVICE #1 -->


        </div>
        <!-- /SERVICES -->



    </div>
    <!-- /CONTENT WRAP -->


@endsection

