@extends('layouts.app', ['class' => 'bg-default', 'og' => 'prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#"'])
@section('title',  'Game Sparring')
@section('css')

@endsection
@section('meta')
    {{--    <link rel="canonical" href="{{config('app.url')}}">--}}
    {{--    <meta name="description" content="{{$index->meta_description}}">--}}
    {{--    <meta name="keywords" content="{{$index->meta_keywords}}">--}}
    {{--    <meta property="og:title" content="{{$index->title}}" >--}}
    {{--    <meta property="og:description" content="{{$index->meta_description}}">--}}
    {{--    <meta property="og:site_name" content="{{ setting('site.title', config('app.name') ) }}" >--}}
    {{--    <meta property="og:type" content="website" >--}}
    {{--    <meta property="og:url" content="{{config('app.url')}}" >--}}
    {{--    <meta property="og:image" content="{{config('app.url')}}/storage/{{$index->image}}" >--}}
    {{--    @if( setting('site.twitter_card') )--}}
    {{--        <meta name="twitter:card" content="{{ setting('site.twitter_card') }}">--}}
    {{--        <meta name="twitter:domain" content="{{config('app.url')}}">--}}
    {{--        @if( setting('site.twitter_site') )--}}
    {{--            <meta name="twitter:site" content="{{'@' . setting('site.twitter_site') }}">--}}
    {{--            <meta name="twitter:creator" content="{{'@' .setting('site.twitter_site')}}">--}}
    {{--        @endif--}}
    {{--        <meta name="twitter:title" content="{{$index->title}}">--}}
    {{--        <meta name="twitter:description" content="{{$index->meta_description}}">--}}
    {{--        <meta name="twitter:url" content="{{config('app.url')}}">--}}

    {{--@endif--}}
    <meta name="title" content="Game Sparring - На острие мобильного киберспорта!">
    <meta name="description" content="Game Sparring - это возможность поучаствовать в интересных турнирах, победить и получить призовые!">
    <meta name="keywords" content="мобильный киберспорт, турниры pubg mobile, pubg mobile турниры на деньги">
    <meta property="og:title" content="Game Sparring - На острие мобильного киберспорта!">
    <meta property="og:description" content="Game Sparring - это возможность поучаствовать в интересных турнирах, победить и получить призовые!">
    <meta property="og:site_name" content="GameSparring">
    <meta property="og:type" content="article">
    <meta property="og:image" content="img/GS.png">
    <meta property="og:url" content="https://gamesparring.xyz">
    <meta name="twitter:title" content="Game Sparring - На острие мобильного киберспорта!" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="https://gamesparring.xyz/">
    <meta name="twitter:description" content="Game Sparring - это возможность поучаствовать в интересных турнирах, победить и получить призовые!">
    <link rel="canonical" href="https://gamesparring.xyz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

@endsection

@section('header')
    {{--    @include('layouts.headers.header')--}}
@endsection
@section('topmenu')
    @include('layouts.navbars.topmenu')
@endsection
@section('content')
    <div class="content news">

    </div>
@endsection

@section('js')

@endsection

@section('footer')
    @include('layouts.footers.nav')
@endsection
