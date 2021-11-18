@extends('layouts.app')

@section('content')
    <section class="admin">
        <div class="container">
           <h1>it is admin dashboard</h1>
           create news post
           <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <input name="caption" type="text">
               <input name="content" type="text">
               <input name="file" type="file">
               <input type="submit">
           </form>
        </div>
    </section>
@endsection