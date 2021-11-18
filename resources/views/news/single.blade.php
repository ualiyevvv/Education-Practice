@extends('layouts.app')

@section('content')
    <section class="single">
        <div class="container">
            <div class="single__header">{{ $post->caption }}</div>
            <div class="single__img"> 
               <img src="{{ $post->file }}" alt="">
            </div>
            <div class="single__info">
                <div class="single__descr">
                    {{ $post->content }}
                </div>
            </div> 
            <hr>
            <div class="single__add">
                <span>{{ $post->user->name }}</span>
                <span>{{ $post->created_at }}</span>
            </div>
        </div>
    </section>
@endsection