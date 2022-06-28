@extends('layout.main')

@section('page-title')
    Все статьи на сайте
@endsection

@section('content')
    <h1>Все статьи на сайте</h1>

    @if(count($articles) > 0)
        @foreach($articles as $el)
            <div class="well">
                <a href="../public/articles/{{ $el->id }}"><h3>{{ $el->title }}</h3></a>
                <p>Последнее обновление статьи: {{ $el->updated_at }}</p>
            </div>
        @endforeach
        {{ $articles->links() }}
    @else
        <p>На данный момент статей нет</p>
    @endif
@endsection
