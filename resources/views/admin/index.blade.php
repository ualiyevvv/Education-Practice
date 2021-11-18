@extends('layouts.app')

@section('content')
    <section class="admin">
        <div class="container">
           <h1 class="mt-4">it is admin dashboard</h1>
           create news post
           <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <input class="input "name="caption" type="text" placeholder="caption">
               <input class="input" name="content" type="text" placeholder="content">
               <input name="file" type="file">
               <input type="submit">
           </form>
           <hr>
           create news order
           <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <input class="input" name="caption" type="text" placeholder="caption">
               <input class="input" name="description" type="text" placeholder="description">
               <input class="input" name="price" type="text" placeholder="price">
               <input name="file" type="file">
               <input type="submit">
           </form>
        </div>
    </section>
@endsection