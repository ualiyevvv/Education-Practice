@extends('layouts.app')

@section('content')
<section class="item">
    <div class="container">
        <?php
            $next_crumb = '';
            $crumbs = explode("/", $_SERVER['REQUEST_URI']);
            // var_dump($crumbs);
        ?>
        <div class="bread">
            <div class="bread__title price-block__title">
                {{$order->caption}}
            </div>
            <div class="bread__links">
                <ul>
                    <li><a href="/">Main</a></li>
                    <li><a href="/shop">shop</a></li>
                    <li><a href="/shop/{{$order->category}}">{{$order->category}}</a></li>
                    <li class="active"><a href="<?=$_SERVER['REQUEST_URI']?>">{{$order->caption}}</a></li>
                </ul>
            </div>
        </div>
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
                    <span>AVAILABLE </span>
                    <span>article number: DEXTER-AE</span>
                </div>
                <div class="item-info__descr">
                    {{ $order->description }}
                </div>
                <div class="item-info__buy">
                    <div class="item-info__buy-price">{{ $order->price }} R</div>
                    <div class="item-info__buy-btn btn"><a href="">BUY</a></div>
                </div>

                <!-- <div class="item-info__additional">
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
                </div> -->
            </div>
        </div>
    </div>
</section>
@endsection