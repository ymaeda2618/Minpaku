<!DOCTYPE html>
<html lang="ja">

<head>

    <head>
        <meta charset="utf-8">
        <title>紫水京</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/common.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/fadein_animation.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        @include('inc.navbar')
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <footer id="footer" class="text-center">
            <div class="footer-logo-area">
                <img src="{{ asset('/img/letter_logo.png') }}" alt="軽井沢 紫水京" />
            </div>
            </div>
            <div class="copyright-area">
                <p>Copyright 2023 &copy; 紫水京理事会 </p>
            </div>
        </footer>
    </body>

</html>