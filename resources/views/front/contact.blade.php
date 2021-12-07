@extends('layouts.front')
@section('section')

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>Prenez contact avec nous</span>
            </div>
            <div class="clearfix"></div>

            <!-- BOOK ONLINE -->
            <div id="book_online" class="booking_popup">
                <div class="book_online">
                    <div class="makeup_fl_form">

                        <form action="{{route('contact.submit')}}" method="post" >
                            @csrf
                            @if(Session::has('message'))
                                <div class="empty_notice"><span>Vos coordonnées ont été soumises avec succès</span></div>
                            @endif
                            <div class="fl-col-6">
                                <div class="your-name">
                                    <label>Nom<span>*</span></label>
                                    <input type="text" required name="name" placeholder="Nom"/>
                                </div>
                            </div>
                            <div class="fl-col-6 last">
                                <div class="your-email">
                                    <label>Email<span>*</span></label>
                                    <input type="text" required name="email" placeholder="Email"/>
                                </div>
                            </div>
                            <div class="fl-col-12">
                                <div class="your-phone">
                                    <label>Titre</label>
                                    <input type="text" required name="title" placeholder="Titre"/>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="your-message">
                                <label>Message: <span>*</span></label>
                                <textarea required name="message" placeholder="Message" cols="3" rows="15"></textarea>
                            </div>
                            <div class="button">
                                <input type="submit" class="makeup_fl_btn" value="valider" />
                            </div>
                            <!-- /RETURN MESSAGES -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /BOOK ONLINE -->

        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->

@endsection

