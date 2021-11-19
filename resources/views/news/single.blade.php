@extends('layouts.app')

@section('content')
    <section class="single">
        <div class="container">
            <?php
                $next_crumb = '';
                $crumbs = explode("/", $_SERVER['REQUEST_URI']);
                // var_dump($crumbs);
            ?>
            <div class="bread">
                <div class="bread__title price-block__title">
                    {{$post->caption}}
                </div>
                <div class="bread__links">
                    <ul>
                        <li><a href="/">Main</a></li>
                    @foreach($crumbs as $crumb)
                        @if($crumb != "")
                            <?
                                $next_crumb = "/" . $crumb;
                            ?> 
                            @if($crumb == end($crumbs))
                                <li class="active"><a href="<?=$_SERVER['REQUEST_URI']?>">{{$post->caption}}</a></li>
                            @else
                                <li><a href="{{route('news.index')}}">News</a></li>
                            @endif
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
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