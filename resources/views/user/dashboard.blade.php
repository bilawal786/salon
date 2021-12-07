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
                <span>Vos commandes</span>
            </div>
            <div>
                <table id="customers">
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                    @if($orders->count())
                        @foreach($orders as $row)
                            <tr>
                                <td>{{$row->order_number}}</td>
                                <td>{{$row->fname}} {{$row->lname}}</td>

                                <td>
                                    @if($row->total == '0')
                                        Points
                                    @else
                                        {{$row->total}} €</td>
                                @endif
                                <td>
                                    @if($row->status == '0')
                                        Nouvelle commande
                                    @else
                                        Compléter
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user.order.view' , ['id'=>$row->id])}}" >
                                        <button>Vue</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        Le panier est vide
                    @endif
                </table>
            </div>

        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->



@endsection

