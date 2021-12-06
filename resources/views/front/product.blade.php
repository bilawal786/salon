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

        <!-- COMMON -->
        <div class="makeup_fl_common">
            <div class="makeup_fl_fotorama">
                <div class="fotorama" data-nav="thumbs"  data-autoplay="4000" data-loop="true" data-keyboard="true"  data-arrows="true" data-click="true" data-swipe="true" data-stopautoplayontouch="false" data-transition="slide" data-fit="cover" data-width="100%">
                    <a href="{{asset($product->photo)}}">
                        <img src="{{asset($product->photo)}}" width="144" height="96" alt="" />
                    </a>
                    @if(!empty ( $product->gallery ))
                        @foreach(json_decode($product->gallery, true) as $images)
                            <a href="{{asset('gallery/'.$images)}}">
                                <img src="{{asset('gallery/'.$images)}}" width="144" height="96" alt="" />
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="common_full_info">
                <form method="POST" action="{{route('addtocart')}}">
                    @csrf
                <div class="title_holder">
                    <div class="common_name">
                        <h3>{{$product->title}}</h3>
                        <span>{{$product->category->name}} / {{$product->subcategory->name}}</span>
                    </div>
                    <div class="common_price">
                        <span>@if($product->oldprice)  <del>{{$product->oldprice}} € </del>  @endif    {{$product->price}} €</span>
                    </div>
                </div>
                <div class="common_info">
                    {!! $product->description !!}
                </div>
                <div class="makeup_fl_btn">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="number" required placeholder="Quantité" name="quantity">
                    <button type="submit">Ajouter au chariot</button>
                </div>
                </form>
            </div>
        </div>
        <!-- /COMMON -->


    </div>
    <!-- /CONTENT WRAP -->
@endsection

