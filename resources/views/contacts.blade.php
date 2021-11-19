@extends('layouts.app')

@section('content')

    <section class="item">
        <div class="container">
            @include('layouts.bread')
            <div class="item-block">
                <div class="item-gallery">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5a53e8356a8f35551f87cba4335e8163dd650f2c5ef8e72f60e8bf43a4793c5b&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="item-info">
                    <div class="item-info__descr">
                        BARBERSHOP «BORODINSKI» <br>
                        ADDRESS: NUR-SULTAN, SULTAN AVENUE, HOUSE 19/8 <br>
                        PHONE: +7 (777) 666-02-66 <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection