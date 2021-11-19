@extends('layouts.app')

@section('content')
    <section class="single">
        <div class="container">
            @include('layouts.bread')
            <div class="single__img" style="background-image: url('{{ $post->file }}')"> 
                <div class="single__header">{{ $post->caption }}</div>
                <span>{{ $post->user->name }}</span>
                <span>{{ $post->created_at }}</span>
            </div>
            <div class="single__info">
                <div class="single__descr">
                    {{ $post->content }}
                </div>
            </div> 
            <hr>
            <div class="single__add">
            </div>
        </div>
    </section>
@endsection