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

                        <form action="/" method="post" class="contact_form" id="contact_form">

                            <div class="fl-col-6">
                                <div class="your-name">
                                    <label>Nom<span>*</span></label>
                                    <input type="text" id="name" placeholder="Nom"/>
                                </div>
                            </div>
                            <div class="fl-col-6 last">
                                <div class="your-email">
                                    <label>Email<span>*</span></label>
                                    <input type="text" id="email" placeholder="Email"/>
                                </div>
                            </div>
                            <div class="fl-col-12">
                                <div class="your-phone">
                                    <label>Sujette</label>
                                    <input type="text" id="subject" placeholder="Sujette"/>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="your-message">
                                <label>Message: <span>*</span></label>
                                <textarea id="message" placeholder="Message" cols="3" rows="15"></textarea>
                            </div>
                            <div class="button">
                                <input type="button" class="makeup_fl_btn makeup_fl_btn_contactsend" value="Réservation en ligne" />
                            </div>
                            <!-- RETURN MESSAGES -->
                            <div class="returnmessage" data-success="Votre message a été reçu, nous vous contacterons bientôt."></div>
                            <div class="empty_notice"><span>Veuillez remplir les champs obligatoires</span></div>
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

