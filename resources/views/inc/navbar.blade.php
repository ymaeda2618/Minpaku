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
                <li><a href="{{ route('calendar.index') }}">予約</a></li>
                <li><a href="{{ route('contact.index') }}">お問い合わせ</a></li>
                @guest
                <li><a href="{{ route('login') }}">ログイン</a></li>@endguest @auth
                <li><a href="{{ route('mypage.index') }}">マイページ</a></li>@endauth
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>