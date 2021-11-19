@extends('layouts.app')

@section('content')
    <section class="price">
        <div class="container">
            @include('layouts.bread')
            <div class="price__title">
                <span></span>
                <span>ИСТИННО МУЖСКАЯ КЛАССИКА</span>
                <span></span>
            </div>
            <div class="price-row">
                <div class="price-block">
                    <div class="price-block__title">
                        МЫ ИСПОЛЬЗУЕМ ТОЛЬКО <br>
                        ЛУЧШИЕ СРЕДСТВА:
                    </div>
                    <div class="price-block__text">
                        <ul>
                            <li>Baxter of California</li>
                            <li>Mr Natty</li>
                            <li>Suavecito</li>
                            <li>Malin+Goetz</li>
                        </ul>
                    </div>
                </div>
                <div class="price-block">
                    <div class="price-block__title">
                        ЦЕНЫ НА УСЛУГИ <br>
                        НАШИХ МАСТЕРОВ:
                    </div>
                    <div class="price-block__text">
                        <table>
                            <tr>
                                <th>asddd</th>
                                <td>a6sd</td>
                            </tr>
                            <tr>
                                <th>asdasdd</th>
                                <td>as11d</td>
                            </tr>
                            <tr>
                                <th>as2ddd</th>
                                <td>assa44asd</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="price-row">
                <div class="price-block__special-text">
                    <div class="price-block__title">
                        НЕСКОЛЬКО СЛОВ О НАС:
                    </div>
                    <ul>
                        <li>
                            Наша парикмахерская занимается исключительно мужскими стрижками. Стрижка каждого клиента для нас - это уникальная и продуманная до мелочей работа. Мы не работаем на количество, мы делаем качество.
                        </li>
                        <li>
                            Наша мастерская расположена в центре города, поэтому сделать стильную стрижку можно в любое время, даже в обеденный перерыв. Здесь вы можете погрузиться в удобную для вас атмосферу, чувствовать себя комфортно и свободно!
                        </li>
                    </ul>
                </div>
            </div>
            <div class="price-row">
                <div class="price-block">
                </div>
            </div>
        </div>
    </section>
@endsection