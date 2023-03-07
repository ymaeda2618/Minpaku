@extends('layouts.app') @section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}">
<div id="main-area">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('パスワードリセット') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row register-input-area">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('送信先メールアドレス') }}</label>
                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row regis-btn-area">
                        <button type="submit" class="btn btn-primary">{{ __('パスワードリンクを送信') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
