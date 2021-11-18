@extends('layouts.app')

@section('content')
    <section class="single">
        <div class="container">
            <div class="single__img" style="background: url('..{{ $post->file }}') center center/cover no-repeat;"> 
                <div class="single__header">{{ $post->caption }}</div>
                <span>{{ $post->user->name }}</span>
                <span>{{ $post->user->created_at }}</span>
            </div>
            <div class="single__info">
                <div class="single__descr">
                    {{ $post->content }}
                </div>
            </div> 
        </div>
    </section>
@endsection