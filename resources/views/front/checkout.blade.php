@extends('layouts.front')
@section('style')
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #bbb;
            padding: 8px;
        }



        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #371352;
            color: #bbb;
        }
    </style>
@endsection
@section('section')

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>Page de paiement</span>
            </div>


            <div class="makeup_fl_form">
                <h3>Informations de facturation
                </h3>
                <br>
                <form action="{{route('checkout.submit')}}" method="post" class="contact_form" id="payment-form">
                    @csrf
                    <div class="fl-col-6">
                        <div class="your-name">
                            <label>Prénom<span>*</span></label>
                            <input type="text" required value="{{$user->fname}}" name="fname"/>
                        </div>
                    </div>
                    <div class="fl-col-6 last">
                        <div class="your-name">
                            <label>Nom de famille<span>*</span></label>
                            <input type="text" required value="{{$user->lname}}" name="lname"/>
                        </div>
                    </div>
                    <div class="fl-col-6">
                        <div class="your-email">
                            <label>Email<span>*</span></label>
                            <input type="text" required name="email" value="{{$user->email}}"/>
                        </div>
                    </div>
                    <div class="fl-col-6 last">
                        <div class="your-email">
                            <label>Phone<span>*</span></label>
                            <input type="text" required name="phone" value="{{$user->phone}}"/>
                        </div>
                    </div>
                    <div class="fl-col-6">
                        <div class="your-email">
                            <label>Adresse<span>*</span></label>
                            <input type="text" required name="address" value="{{$user->address}}"/>
                        </div>
                    </div>
                    <div class="fl-col-6 last">
                        <div class="your-email">
                            <label>Pays<span>*</span></label>
                            <input type="text" required name="country" value="{{$user->country}}"/>
                        </div>
                    </div>
                    <div class="fl-col-6">
                        <div class="your-email">
                            <label>Postal Code<span>*</span></label>
                            <input type="text" required name="postal" value="{{$user->postal}}"/>
                        </div>
                    </div>
                    <input type="hidden" value="{{$total}}" name="total">
                    <div class="your-message">
                        <label>Message: <span>*</span></label>
                        <textarea id="message" name="notes" placeholder="Message" cols="3" rows="5"></textarea>
                    </div>

            </div>

            <hr>

            <div class="row">
                <div class="col-xl-7 col-lg-12 col-md-12">
                    <div class="cart-collaterals">
                        <div class="makeup_fl_form">
                            <h3>Totaux du panier</h3>
                            <br>
                            <table class="shop_table shop_table_responsive">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <td>Articles au total</td>
                                    <td data-title="Subtotal"><span class="amount">{{$cartTotalQuantity}}</span></td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <td>Le montant final</td>
                                    <td data-title="Subtotal"><span class="amount">{{$total}} €</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12">
                    <hr>
                    <div class="payment-wrap offset-sm-top-45">
                        <div class="woocommerce-checkout-payment" id="payment">
                            <ul style="margin: 0px" class="wc_payment_methods payment_methods methods">
                                <li class="wc_payment_method payment_method_bacs">
                                    <input checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs" type="radio">
                                    <label for="payment_method_bacs">Payez via votre carte</label>
                                    <div class="payment_box payment_method_bacs visibales">
                                        <div class="payment-method">
                                            <div class="payment-accordion">
                                                <div class="order-button-payment">
                                                    <div class="clearfix">
                                                        <label>Moyen de paiement <span class="required">*</span></label>
                                                        <select name="pay" class="form-control" id="pay">
                                                            <option value="complete">Payer par carte bancaire</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group stripe-payment-method-div">
                                                        <label>{{ __('Carte bancaire') }}</label> <span class="text-danger">*</span>
                                                        <div id="card-element"></div>
                                                        <div id="card-errors" class="text-danger" role="alert"></div>
                                                    </div>
                                                    <input id="card-button" class="btn btn-transparent btn-sm btn-icon pull-sm-right offset-top-30" value="Payer" type="submit" data-secret="{{ $intent }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </div>
        <!-- /COMMMON -->


    </div>
    <!-- /CONTENT WRAP -->
@endsection

@section('script')

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripeKey = "{{ env('STRIPE_PUBLISHABLE_KEY') }}";
    </script>
    <script src="js/stripe.js"></script>
    <script>
@endsection
