@extends('layouts.app')

@section('content')
        <section class="login">
            <div class="container">
                <div class="login__form">
                    <div class="login__header">Registration</div>
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <input class="input" name="email" type="email" placeholder="email" value="{{ old('email') }}">
                        <input class="input" name="name" type="text" placeholder="name" value="{{ old('name') }}">
                        <input class="input" name="phone" type="text" placeholder="phone" value="{{ old('phone') }}">
                        <input class="input" name="password" type="password" placeholder="password">
                        <input class="input" name="password_confirmation" type="password" placeholder="repeat password">
                        <input class="btn" type="submit" value="Sign up">
                    </form>
                    or <a href="{{ route('login') }}">sign in</a>
                </div>
            </div>
        </section>
@endsection
