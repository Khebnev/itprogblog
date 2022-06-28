@extends('layout.main')

@section('page-title')
    {{ $title }}
@endsection

@section('content')
    <h1>Страница про нас</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima cum, atque soluta velit impedit unde voluptatem ipsam ullam vitae accusantium, voluptates quibusdam in? Officia exercitationem culpa mollitia fugit dolorem reiciendis.</p>
    @if(count($params) > 0) 
        <ul class="list-group">
            @foreach($params as $el)
                <li class="list-group-item">{{ $el }}</li>
            @endforeach
        </ul>
    @endif
@endsection