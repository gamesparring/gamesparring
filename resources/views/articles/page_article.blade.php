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
    <div class="content news-details">
        <div class="container">
            <h1 class="title date with-separator">
                <span>European Masters : Les représentants Français prêt à conquérir l'Europe !</span><br>
                <span class="date-container">22/04/2020</span>
            </h1>
            <div class="news-content">
                <div class="introduction">
                    <p>Deux semaines après le sacre de GamersOrigin durant le spring split de la LFL, nous sommes à l’aube d’un nouveau rendez-vous très important&nbsp;!</p>
                </div>
                <img src="https://images.prismic.io/liguefrlol/735a6eff-7831-44c8-9458-50d613f39fcb_lfl-european-masters.jpg?auto=compress,format&amp;rect=0,0,823,361&amp;w=823&amp;h=361" alt="">
                <h2>Les nouveaux talents européens</h2><p></p><p>Les European Masters commencent&nbsp;! Cette compétition a pour vocation première de braquer les projecteurs sur l’essor des futurs talents européens. Rappelons l’ascension fulgurante des joueurs de l’équipe Mad Lions EC qui, après avoir remporté le summer split de 2018, ont fait irruption sur le premier plan compétitif&nbsp;: des noms tels que <strong>Nemesis</strong>, <strong>Selfmade </strong>ou <strong>Crownshot</strong>…</p><p>Avec le temps et l’expérience, cette compétition s’affûte et s’adapte afin de proposer un niveau toujours plus compétitif.</p><h2><strong>L'envolé tricolore</strong><br>
                </h2><p>En effet, en raison du niveau relevé dont le circuit français peut se targuer, cette année, les deux meilleures équipes de la LFL ont directement obtenu leurs tickets pour le main event, sans avoir à passer par la case des play in.</p><p>Pour porter les couleurs de la France dans cette arène européenne, nos champions seront GamersOrigin, et Team LDLC OL.<br>
                </p><h4><em><strong>GamersOrigin</strong></em></h4><p></p><p>Après une fin de split époustouflante sur une remontada que peu attendaient, GamersOrigin semble en très grande forme pour aborder ce rendez-vous international. Leur passage dans la salle du temps pendant les playoffs semble avoir été extrêmement bénéfique, et ce qu’ils ont montré en finale semble confirmer que leurs anciennes faiblesses ont été gommées. Reste à le montrer dans les jours à venir.</p><p></p><h4><em><strong>Team LDLC OL<br>
                        </strong></em></h4><p>Du côté de LDLC OL, l’état de forme est plus questionnable. Après une fin de saison régulière redoutable d’efficacité, marquée par une impressionnante domination de la Lyon esport, l’équipe des renards semble être passée à côté de son rendez-vous en finale du spring split. Il n’est pas déraisonnable de penser que <strong>Yellowstar </strong>et ses coéquipiers auront su mettre à profit la pause pour tirer les bonnes conclusions, et aborder leurs prochaines rencontres dans la belle forme à laquelle ils nous ont habitué.</p><h2>La compétition</h2><p></p><p>Penchons-nous maintenant sur le détail de ces rencontres. Dans cette phase de groupe,&nbsp;il y a 16 équipes réparties en 4 groupes. Chaque équipe affronte 2 fois en BO1 les autres équipes de son groupe. A l’issue de cette phase, les 2 meilleures équipes de chaque groupe sont qualifiées pour les phases finales.</p><p><em><strong>Dans le groupe de GamersOrigin,</strong></em> sont présents BT Excel (second de la ligue anglo-irlandaise), YDN Gamers (premier du circuit italien) et Team GamerLegion (troisième du circuit allemand).</p><p><em><strong>Dans le groupe de LDLC OL,</strong></em> sont présents&nbsp;: AGO ROGUE (premier d’Ultraliga), DefuseKids, et Vodafone Giants (premier de la LVP).</p><p>L’adversité sera potentiellement grande pour nos poulains. Rappelons que le spring split 2019 des European Masters avaient d'ailleurs été remporté par une équipe de LFL : les Misfits Premier.<br>
                </p><h2>Une grande attente<br>
                </h2><p>Chaque année, pourtant, les attentes sont grandes pour les équipes venant représenter la France. Cette année encore, tous les espoirs sont permis au regard de ce qui a été montré en LFL au cours du spring split.</p><p>Avec des rookies aussi talentueux que charismatiques sur la midlane&nbsp;: <strong>Vetheo </strong>pour LDLC OL, et <strong>Toucouille </strong>pour GamersOrigin, les raisons ne manquent pas de soutenir nos porte-étendards français dans la bataille qui est sur le point de se livrer pour le titre européen.</p><p>Soyez au rendez-vous mercredi à 22h pour le premier match de nos français&nbsp;!&nbsp;</p><h3>Glopo</h3><p>@gloponus</p>
            </div>
            <div class="other-news with-separator">
                <a href="/articles/la-lfl-reprend-le-28-juillet-">
                    <div class="news-card">
                        <div class="card-image" style="background-image: url('https://images.prismic.io/liguefrlol/ca5823db-f4a6-48a9-b11b-8c5a8f6eaf86_recap%5Elfl.jpg?auto=compress,format&amp;rect=0,0,823,361&amp;w=823&amp;h=361')"></div>
                        <div class="card-content">
                            <div class="card-date">9 mai 2020</div>
                            <div class="card-title">La LFL revient le 28 juillet !
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/articles/lfl-lequipe-type-de-glopo-pour-la-saison">
                    <div class="news-card">
                        <div class="card-image" style="background-image: url('https://images.prismic.io/liguefrlol/79852832-d43f-4a92-af37-2d8e7d677f1f_Equipe-type-LFL-de-la-saison.jpg?auto=compress,format&amp;rect=0,0,823,361&amp;w=823&amp;h=361')"></div>
                        <div class="card-content">
                            <div class="card-date">16 avril 2020</div>
                            <div class="card-title">LFL : L'équipe type de Glopo pour la saison
                            </div>
                        </div>
                    </div>
                </a>



            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

@section('footer')
    @include('layouts.footers.nav')
@endsection
