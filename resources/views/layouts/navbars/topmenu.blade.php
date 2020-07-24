<div class="main-nav open" data-retractable="true">
    <div class="container">
        <div class="main-nav-content">
            <div class="lfl-logo">
                <a href="{{ route('index') }}">
                    <img src="/assets/logo.svg" alt="Logo GameSparring"/>
                </a>
            </div>
            <div >
                <a href="{{ route('resultats') }}">Результаты</a>
            </div>
            <div >
                <a href="{{  route('tournaments') }}">Турниры</a>
            </div>
            <div >
                <a href="{{ route('articles') }}">Новости</a>
            </div>
            <div >
                <a href="{{ route('home') }}">Войти</a>
            </div>
            <ul class="ul-top-menu">
                <li style="display: flex; flex-direction: column">
                    <a href="{{ LaravelLocalization :: getLocalizedURL ( 'ru' )}}">RU</a>
                    <br/>
                    <a href="{{ LaravelLocalization :: getLocalizedURL ( 'en' )}}">EN</a>
                </li>
            </ul>
        </div>
    </div>

</div>


<div class="mini-nav">
    <img src="/assets/picto-menu-burger.svg?f03e33c" data-role="sidenav-toggle">
    <a href="/">
        <img class="logo" src="/assets/logo.svg" alt="Logo La Ligue Française">
    </a>
</div>
<aside class="side-nav" data-role="sidenav-content">
    <div class="sidenav-header">
        <img class="close-cross" src="/assets/cross.svg?96d6162" data-role="sidenav-toggle">
        <div class="logo">
            <a href="/">
                <img src="/assets/logo.svg" alt="Logo La Ligue Française" />
            </a>
        </div>
    </div>

    <ul class="menu">
        <li ><a href="{{ route('resultats') }}" >РЕЗУЛЬТАТЫ</a></li>
        <li ><a href="{{ route('tournaments') }}" >ТУРНИРЫ</a></li>
        <li ><a href="{{ route('articles') }}" >НОВОСТИ</a></li>
        <li ><a href="{{ route('home') }}" >ВОЙТИ</a></li>
        <li style="display: flex; flex-direction: column">
            <a href="{{ LaravelLocalization :: getLocalizedURL ( 'ru' )}}" style="display: block">RU</a>
            <br/>
            <a href="{{ LaravelLocalization :: getLocalizedURL ( 'en' )}}" style="display: block">EN</a>
        </li>
    </ul>
</aside>
<script>
    function Remov() {
        if (document.getElementById('DropdownContent').classList.contains('dropdown-contents')) {
            document.getElementById('DropdownContent').style.cssText='display: block;baborder-radius: 2px;margin-top: 10px;background-color:unset'
        }else if(document.getElementById('DropdownContent').classList.contains('dropdown-content-mobile')){
            document.getElementById('DropdownContent').style.cssText='display: none;baborder-radius: 2px;margin-top: 10px;background-color:unset'
        }
    }
</script>
