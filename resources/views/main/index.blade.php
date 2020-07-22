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
    @include('layouts.navbars.navbar')
@endsection
@section('content')
    <div class="overlay" data-role="sidenav-overlay"></div>
    <div class="content home">
        <!--	<div class="container">-->
        <!--		<div class="home-pictos">-->
        <!--			<div class="item">-->
        <!--				<div class="picto">-->
        <!--					<img src="https://images.prismic.io/liguefrlol%2F6653928a-fbec-4fc5-bfa1-c83f817f76db_sword.svg?auto=compress,format"/>-->
        <!--				</div>-->
        <!--				<div class="description">-->
        <!--					<p>Tout au long de l'ann&eacute;e, les 8 meilleures &eacute;quipes de France s'affrontent lors de 2 segments, dans la plus prestigieuse comp&eacute;tition nationale.</p>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--			<div class="item">-->
        <!--				<div class="picto">-->
        <!--					<img src="https://images.prismic.io/liguefrlol%2F34930eb8-c887-479a-9637-61e160a3645d_media.svg?auto=compress,format"/>-->
        <!--				</div>-->
        <!--				<div class="description">-->
        <!--					<p>Une couverture int&eacute;grale de la comp&eacute;tition r&eacute;alis&eacute;e par O'Gaming et ES1 pour une saison riche en sensations ! </p>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--			<div class="item">-->
        <!--				<div class="picto">-->
        <!--					<img src="https://images.prismic.io/liguefrlol%2Ff31281c5-f051-4542-8635-15036dee5d78_star.svg?auto=compress,format"/>-->
        <!--				</div>-->
        <!--				<div class="description">-->
        <!--					<p>Une comp&eacute;tition qui s'inscrit dans le circuit professionnel de RIOT Games, une &eacute;tape privil&eacute;gi&eacute;e pour mener au LEC. </p>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!--	</div>-->
        <div class="container p-md-25">
            <ul class="tournaments-list">
                @foreach($tournaments as $tournament)
                <li class="tournament-item hvr-float-shadow">
                    <div class="game-wrapper">
                        <a href="/find-tournaments/pubg-mobile-tournaments" class="game-info ">
                            <div class="game-icon">
                                <img data-src="https://cdn.game.tv/game-tv-content/images_2/default/game_icons/676560b6897f7b09be8fd26c3d02b83e/en/676560b6897f7b09be8fd26c3d02b83e.png" class="img-responsive lazy" alt="PUBG MOBILE">
                            </div>
                            <span class="game-name">PUBG MOBILE</span>
                        </a>
                        <div class="country-flag">
                            <img class="country-icon" src="https://cdn.game.tv/locales/OT.png">
                            <p class="country-name">{{$tournament->t_map}}</p>
                        </div>
                    </div>
                    <div class="game-banner-wrapper">
                        <a href="/ru/tournaments/gang-of-gamers's-PUBG-Mobile-tournament-0210-2338--0e08aab2cf3d4df399bfacf8b3ca1981" class="game-banner btn-track-join-now" data-eventname="join_tournament_clicked" data-gameid="-pubg-mobile" data-gamename="PUBG MOBILE">
                            <figure class="tournament-image  banner-wrapper">
                                <img class="img-responsive banner-image loadded unblur" alt="PUBG MOBILE" src="{{ Voyager::image($tournament->thumbnail('medium')) }}">
                            </figure>
                            <div class="bg-gradient"></div>
                        </a>
                    </div>
                    <div class="tournament-details">
                        <a href="/ru/tournaments/gang-of-gamers's-PUBG-Mobile-tournament-0210-2338--0e08aab2cf3d4df399bfacf8b3ca1981" class="btn-track-join-now" data-eventname="join_tournament_clicked" data-gameid="-pubg-mobile" data-gamename="PUBG MOBILE">
                            <div class="platform-details">
                                <p class="platform">ПЛАТФОРМА</p>
                                <span class="platform-icon web"></span>
                                <p class="discord-title">mobile</p>
                                <p class="versus">{{$tournament->t_mode_type}}</p>
                            </div>
                            <p>Участников: {{$tournament->users()->count()}}/100, {{$tournament->t_payment}}Р/kill, участие: {{$tournament->t_price}}Р </p>
                            <h3 class="game-title">{{$tournament->t_name}}</h3>
                            <div class="joining-info" data-date="2020-10-02T17:53:00+00:00">
                                <div class="joining-info-content">
                                    <p class="join-date">{{$tournament->normalizeDate()}}</p>
                                    <p class="join-time">{{$tournament->normalizeTime()}} <span class="add-timezoneAbbr">MSK</span></p>
                                </div>
                                @if($tournament->users()->count() < 100)
                                    <span class="join-now">ПРИСОЕДИНИТЬСЯ</span>
                                    @else
                                    <span class="join-now">ПРИСОЕДИНИТЬСЯ</span>
                                    @endif
                            </div>
                        </a>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <div class="container">
            <div class="fresh-news">
                <div class="news-header">
                    <div class="news-title"><h2
                            class="title">Свежие новости</h2>
                    </div>
                    <a href="">
                        <div class="decorated-button">Все  новости</div>
                    </a>
                </div>
                <div class="news-content">
                    @foreach($posts as $post)
                    <a href="{{route('post.show',$post->slug)}}">
                        <div class="news-card">
                            <div class="card-image" style="background-image: url({{ Voyager::image($post->thumbnail('medium')) }})" ></div>
                            <div class="card-content">
                                <div class="card-date">{{$post->createdAtFormated()}}</div>
                                <div class="card-title">{{$post->title}}</div>
                            </div>
                        </div>
                    </a>
                @endforeach


                </div>
                <div class="news-footer">
                    <a href="/articles">
                        <div class="decorated-button">Все &#039;новости</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="network-title">
                <div class="title">Также следите за Game Sparring</div>
                <div class="networks">
                    <a href="" target="_blank"
                       class="decorated-button twitter">
                        <img src="/assets/picto-twitter-bleu.svg?5d35428"
                             alt="Picto twitter">
                        <span>twitter</span>
                    </a>
                    <a href="" target="_blank"
                       class="decorated-button instagram">
                        <img src="/assets/picto-instagram-violet.svg?457a603"
                             alt="Picto instagram">
                        <span>instagram</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
    @endsection

@section('js')

@endsection

@section('footer')
    @include('layouts.footers.nav')
@endsection
