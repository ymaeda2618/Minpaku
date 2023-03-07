@extends('layouts.app') @section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}">
<div id="main-area">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('会員登録画面') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row register-input-area">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('名前') }}</label>

                        <div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row register-input-area">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row register-input-area">
                        <label for="tel" class="col-md-4 col-form-label text-md-end">{{ __('電話番号 ※ハイフン無し') }}</label>

                        <div>
                            <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel"> @error('tel')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row register-input-area">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row register-input-area">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('パスワード確認用') }}</label>

                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row regis-btn-area">
                        <button type="submit" class="btn btn-primary">{{ __('登録') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
