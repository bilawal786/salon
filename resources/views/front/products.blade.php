@extends('layouts.front')
@section('style')
    <style>
        .makeup_fl_blog_list {
            width: 48%;
            margin-bottom: 70px;
            float: left;
            padding: 5px;
        }
    </style>
@endsection
@section('section')

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">
        <div class="makeup_fl_title_holder">
            <div class="line"></div>
            <span>Nos produits</span>
        </div>
        <div class="clearfix"></div>

        <!-- SERVICES -->
        <div class="makeup_fl_services makeup_fl_masonry">

            <!-- SERVICE #1 -->
            @foreach($products as $product)
            <div class="service makeup_fl_masonry_in">
                <div class="srv_img">
                    <img src="{{asset($product->photo)}}" alt="" />
                    <a href="{{route('front.product', ['id' => $product->id])}}"><div class="overlay"></div></a>
                    <div class="price"><span>@if($product->oldprice)  <del>{{$product->oldprice}} € </del>  @endif    {{$product->price}} €</span></div>
                </div>
                <div class="title_holder">
                    <h3><a href="{{route('front.product', ['id' => $product->id])}}">{{$product->title}}</a></h3>
                    <span>{{$product->category->name}} / {{$product->subcategory->name}}</span>
                </div>
            </div>
        @endforeach
            <!-- /SERVICE #1 -->


        </div>
        <!-- /SERVICES -->


    </div>
    <!-- /CONTENT WRAP -->

@endsection

