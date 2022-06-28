@extends('layout.main')

@section('page-title')
    Статья на сайте
@endsection

@section('content')
    <a href="../articles" class="btn btn-warning">Назад</a>
    <h1>{{ $article->title }}</h1>

    <div>
       <p>{{ $article->text }}</p> 
       <p>Дата создания: {{ $article->created_at }}</p>
    </div>
@endsection
