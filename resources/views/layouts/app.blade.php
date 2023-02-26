<!DOCTYPE html>
<html lang="ja">

<head>

    <head>
        <meta charset="utf-8">
        <title>紫水京</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/common.css') }}">
    </head>

    <body>
        @include('inc.navbar')
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <footer id="footer" class="text-center">
            <p>Copyright 2023 &copy; Ring.inc. </p>
        </footer>
    </body>

</html>
