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
                <span>Panier</span>
            </div>
            <div>
                <table id="customers">
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    @if($cartitems->count())
                    @foreach($cartitems as $cart)
                    <tr>
                        <td>{{$cart->name}}</td>
                        <td>{{$cart->price}} €</td>
                        <td>{{$cart->quantity}}</td>
                        <td>{{$cart->price * $cart->quantity}} €</td>
                        <td><a href="{{route('remove.cart', ['id' =>$cart->id])}}">❌</a></td>
                    </tr>
                    @endforeach
                    @else
                        Le panier est vide
                        @endif
                </table>
            </div>

            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-4"></div>
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="cart-collaterals">
                        <div class="cart_totals">
                            <h2>Totaux du panier</h2>
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
                            <div class="makeup_fl_btn">
                                <a class="checkout-button alt wc-forward" href="{{route('front.checkout')}}">Passer à la caisse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /COMMMON -->


    </div>
    <!-- /CONTENT WRAP -->
@endsection

