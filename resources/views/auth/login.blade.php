@extends('layouts.front')

@section('section')

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>Connexion</span>
            </div>


            <div class="makeup_fl_form">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="fl-col-6">
                        <div class="your-name">
                            <label>Email<span>*</span></label>
                            <input type="text" name="email" placeholder="Email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="fl-col-6 last">
                        <div class="your-email">
                            <label>Mot de passe<span>*</span></label>
                            <input type="password" name="password" placeholder="Mot de passe"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" class="makeup_fl_btn" value="Connexion" />
                    </div>
                </form>
            </div>


        </div>
        <!-- /COMMMON -->


    </div>
    <!-- /CONTENT WRAP -->
    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>S'inscrire</span>
            </div>


            <div class="makeup_fl_form">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="fl-col-6">
                        <div class="your-name">
                            <label>Prénom<span>*</span></label>
                            <input type="text" name="fname" placeholder="Prénom"/>
                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="fl-col-6 last">
                        <div class="your-name">
                            <label>Nom de famille<span>*</span></label>
                            <input type="text" name="lname" placeholder="Nom de famille"/>
                            @error('lname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="fl-col-6">
                        <div class="your-name">
                            <label>Email<span>*</span></label>
                            <input type="text" name="email" placeholder="Email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="fl-col-6 last">
                        <div class="your-name">
                            <label>Téléphone<span>*</span></label>
                            <input type="text" name="phone" placeholder="Téléphone"/>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="fl-col-6">
                        <div class="your-name">
                            <label>Mot de passe<span>*</span></label>
                            <input type="text" name="password" placeholder="Mot de passe"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="fl-col-6 last">
                        <div class="your-name">
                            <label>Confirmez le mot de passe<span>*</span></label>
                            <input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe"/>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" class="makeup_fl_btn" value="S'inscrire" />
                    </div>
                </form>
            </div>


        </div>
        <!-- /COMMMON -->


    </div>
    <!-- /CONTENT WRAP -->
@endsection

