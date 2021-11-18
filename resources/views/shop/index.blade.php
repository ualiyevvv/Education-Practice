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
                        <div class="shop-item">
                            <div class="shop-item__photo">
                                <img src="" alt="">
                            </div>
                            <div class="shop-item__info">
                                <div class="shop-item__header">
                                    <p>Увлажняющий кондиционер</p> 
                                    «Baxter of California»
                                </div>
                                <div class="shop-item__buy">
                                    <div class="shop-item__buy-price">1 900 R</div>
                                    <div class="shop-item__buy-btn">
                                        <a href="" class="btn">купить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-item">
                            <div class="shop-item__photo">
                                <img src="" alt="">
                            </div>
                            <div class="shop-item__info">
                                <div class="shop-item__header">
                                    <p>Увлажняющий кондиционер</p> 
                                    «Baxter of California»
                                </div>
                                <div class="shop-item__buy">
                                    <div class="shop-item__buy-price">1 900 R</div>
                                    <div class="shop-item__buy-btn">
                                        <a href="" class="btn">купить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-item">
                            <div class="shop-item__photo">
                                <img src="" alt="">
                            </div>
                            <div class="shop-item__info">
                                <div class="shop-item__header">
                                    <p>Увлажняющий кондиционер</p> 
                                    «Baxter of California»
                                </div>
                                <div class="shop-item__buy">
                                    <div class="shop-item__buy-price">1 900 R</div>
                                    <div class="shop-item__buy-btn">
                                        <a href="" class="btn">купить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-item">
                            <div class="shop-item__photo">
                                <img src="" alt="">
                            </div>
                            <div class="shop-item__info">
                                <div class="shop-item__header">
                                    <p>Увлажняющий кондиционер</p> 
                                    «Baxter of California»
                                </div>
                                <div class="shop-item__buy">
                                    <div class="shop-item__buy-price">1 900 R</div>
                                    <div class="shop-item__buy-btn">
                                        <a href="" class="btn">купить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection