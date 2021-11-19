@extends('layouts.app')

@section('content')
<section class="item">
    <div class="container">
        @include('layouts.bread')
        <div class="item-block">
            <div class="item-gallery">
                <div class="item-gallery__slider">
                    <div class="item-gallery__main" style="background-image: url('{{ $order->file }}')">

                    </div>
                    <div class="item-gallery__add">
                        <div class="item-gallery__add-bl"></div>
                        <div class="item-gallery__add-bl"></div>
                        <div class="item-gallery__add-bl"></div>
                    </div>
                </div>
            </div>
            <div class="item-info">
                <div class="item-info__article">
                    <span>есть в наличии</span>
                    <span>аритикул: DEXTER-AE</span>
                </div>
                <div class="item-info__descr">
                    {{ $order->description }}
                </div>
                <div class="item-info__buy">
                    <div class="item-info__buy-price">{{ $order->price }} R</div>
                    <div class="item-info__buy-btn btn"><a href="">купить</a></div>
                </div>

                <div class="item-info__additional">
                    <div class="item-info__additional_header">
                        В набор входят:
                    </div>
                    <div class="item-info__additional_list">
                        <ul>
                            <li>sdf</li>
                            <li>sdfsdf</li>
                            <li>sdfsdf</li>
                            <li>sdfsdfsdf</li>
                            <li>sdfsdf</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection