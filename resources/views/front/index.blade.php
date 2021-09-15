@extends('layouts.front')
@section('section')

<!-- CONTENT WRAP -->
<div class="makeup_fl_content_wrap">


    <!-- FOTORAMA -->
    <div class="makeup_fl_fotorama">
        <div class="fotorama" data-nav="thumbs"  data-autoplay="4000" data-loop="true" data-keyboard="true"  data-arrows="true" data-click="true" data-swipe="true" data-stopautoplayontouch="false" data-transition="slide" data-fit="cover" data-width="100%">
            <a href="{{asset('front/img/full1.jpg')}}">
                <img src="{{asset('front/img/thumb1.jpg')}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset('front/img/full2.jpg')}}">
                <img src="{{asset('front/img/thumb2.jpg')}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset('front/img/full3.jpg')}}">
                <img src="{{asset('front/img/thumb3.jpg')}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset('front/img/full4.jpg')}}">
                <img src="{{asset('front/img/thumb4.jpg')}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset('front/img/full5.jpg')}}">
                <img src="{{asset('front/img/thumb5.jpg')}}" width="144" height="96" alt="" />
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
                    <p>Aliquam metus ex, laoreet in nulla et, varius aliquam est. Vestibulum neque dui, auctor sit amet tincidunt ac, sodales sit amet est. Quisque gravida sit amet odio sed vulputate. Curabitur eleifend.</p>
                    <br />
                    <span>Laura Brandon</span>
                </div>
                <div class="item">
                    <p>Sed ultrices eleifend risus eu convallis. Cras lacinia interdum ligula id posuere. Sed nec diam libero. Nunc arcu orci, mollis nec condimentum tincidunt, facilisis in nunc. Quisque malesuada molestie.</p>
                    <br />
                    <span>Britney Spears</span>
                </div>
                <div class="item">
                    <p>Sed ultrices eleifend risus eu convallis. Cras lacinia interdum ligula id posuere. Sed nec diam libero. Nunc arcu orci, mollis nec condimentum tincidunt, facilisis in nunc. Quisque malesuada molestie.</p>
                    <br />
                    <span>Selena Gomez</span>
                </div>
                <div class="item">
                    <p>Sed ultrices eleifend risus eu convallis. Cras lacinia interdum ligula id posuere. Sed nec diam libero. Nunc arcu orci, mollis nec condimentum tincidunt, facilisis in nunc. Quisque malesuada molestie.</p>
                    <br />
                    <span>Paula Samry</span>
                </div>
                <div class="item">
                    <p>Sed ultrices eleifend risus eu convallis. Cras lacinia interdum ligula id posuere. Sed nec diam libero. Nunc arcu orci, mollis nec condimentum tincidunt, facilisis in nunc. Quisque malesuada molestie.</p>
                    <br />
                    <span>Wendy Clifford</span>
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
                <img src="{{asset('front/img/package11.jpg')}}" alt="" />
            </div>
            <div class="pckg_info">
                <div class="title_holder">
                    <h3>PForfait maquillage arty</h3>
                    <span>Durée : 2 - 3 heures</span>
                </div>
                <div class="price_list">
                    <ul>
                        <li>
                            <div class="price_li">
                                <span class="span1">Conseil maquillage</span>
                                <span class="span2">19.00 €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">Coupe de cheveux &amp; Style</span>
                                <span class="span2">25.00 €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">Maquillage Aérographe</span>
                                <span class="span2">31.00 €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">Application de faux cils</span>
                                <span class="span2">24.00 €</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="total"><span>Total: 99.00 €</span></div>
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
                <img src="{{asset('front/img/package22.jpg')}}" alt="" />
            </div>
            <div class="pckg_info">
                <div class="title_holder">
                    <h3>Forfait maquillage commercial</h3>
                    <span>Durée : 2 - 3 heures</span>
                </div>
                <div class="price_list">
                    <ul>
                        <li>
                            <div class="price_li">
                                <span class="span1">Conseil maquillage</span>
                                <span class="span2">19.00 €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">Application de maquillage d'événement</span>
                                <span class="span2">35.00 €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">Application de cils bénéfique</span>
                                <span class="span2">10.00 €</span>
                            </div>
                        </li>
                        <li>
                            <div class="price_li">
                                <span class="span1">Lèvre & Cire pour le menton</span>
                                <span class="span2">22.00 €</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="total"><span>Total: 86.00 €</span></div>
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

