@extends('layouts.app')

@section('content')
    <section class="shop">
        <div class="container">
            @include('layouts.bread')
            <div class="shop__main">
                <div class="shop-sidebars">
                    <form action="{{ route('shop.index') }}" method="GET">
                        <div class="shop-sidebars__bl">
                            <div class="shop-sidebars__bl-header">
                                Manufacturers:
                            </div>
                            <div class="form-group">
                                <input name="maker" type="checkbox">
                                <label for="">baxter of california</label>
                            </div>
                            <div class="form-group">
                                <input name="maker" type="checkbox">
                                <label for="">me natty</label>
                            </div>
                            <div class="form-group">
                                <input name="maker" type="checkbox">
                                <label for="">murray's</label>
                            </div>
                        </div>
                        <div class="shop-sidebars__bl">
                            <div class="shop-sidebars__bl-header">
                                Categories:
                            </div>
                            <div class="form-group">
                                <input name="category" type="radio">
                                <label for="">shaving accessories</label>
                            </div>
                            <div class="form-group">
                                <input name="category" type="radio">
                                <label for="">care products</label>
                            </div>
                            <div class="form-group">
                                <input name="category" type="radio">
                                <label for="">accessories</label>
                            </div>
                        </div>
                        <div class="shop-sidebars__btn">
                            <input class="btn" type="submit" value="View">
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
                                        <a href='{{ route("shop.show", ["category"=>"$order->category","caption"=>"$order->caption"]) }}' class="btn">buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                        {{ $orders->links('layouts.paginate') }}
                    @else
                        Orders doesn't exist
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection