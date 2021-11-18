@extends('layouts.app')

@section('content')
    <section class="shop">
        <div class="container">
            @include('layouts.bread')
            <div class="shop__main">
                <div class="shop-sidebars">
                    <form action="">
                        <div class="shop-sidebars__bl">
                            <div class="shop-sidebars__bl-header">
                                производители:
                            </div>
                            <div class="shop-sidebars__bl-list">

                            </div>
                        </div>
                        <div class="shop-sidebars__bl">
                            <div class="shop-sidebars__bl-header">
                                Группы товаров:
                            </div>
                            <div class="shop-sidebars__bl-list">
                                
                            </div>
                        </div>
                        <div class="shop-sidebars__btn">
                            <input class="btn" type="submit" value="Показать">
                        </div>
                    </form>
                </div>
                <div class="shop-catalog">
                    <div class="shop-catalog__wrapper">
                    @if(count($orders)>0)
                        @foreach($orders as $order)
                        <div class="shop-item">
                            <div class="shop-item__photo" style="background-image: url('{{ $order->file }}')">
                            </div>
                            <div class="shop-item__info">
                                <div class="shop-item__header">
                                    {{ $order->caption }}
                                </div>
                                <div class="shop-item__buy">
                                    <div class="shop-item__buy-price">{{ $order->price }} R</div>
                                    <div class="shop-item__buy-btn">
                                        <a href="{{ route('shop.show', $order->id) }}" class="btn">купить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                        {{ $orders->links('layouts.paginate') }}
                    @else
                        Товаров нет
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection