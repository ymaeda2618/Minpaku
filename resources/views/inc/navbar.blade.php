<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img class="pc-zone" src="{{ asset('/img/letter_logo.png') }}" alt="軽井沢 紫水京" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('calendar') ? 'active' : ''}}"><a href="{{ route('calendar.index') }}">予約</a></li>
                <li class="{{Request::is('about') ? 'active' : ''}}"><a href="" onclick="alert('現在準備中です。'); return false;">運営会社</a></li>
                <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="{{ route('contact.index') }}">お問い合わせ</a></li>
                @guest
                <li class="{{Request::is('login') ? 'active' : ''}}"><a href="{{ route('login') }}">ログイン</a></li>@endguest @auth
                <li class=""><a href="" onclick="alert('現在準備中です。'); return false;">マイページ</a></li>@endauth
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>