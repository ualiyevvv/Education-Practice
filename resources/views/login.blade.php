@extends('layouts.app')

@section('content')
        <section class="login">
            <div class="container">
                <div class="login__form">
                    <div class="login__header">login</div>
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        <input class="input" name="email" type="email" placeholder="email">
                        <input class="input" name="password" type="password" placeholder="password">
                        <input class="btn" type="submit" value="Sign in">
                    </form>
                    or <a href="{{ route('register') }}">sign up</a>
                </div>
            </div>
        </section>
@endsection
