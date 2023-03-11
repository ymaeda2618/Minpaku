@extends('layouts.app') @section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/user.css') }}">
<div id="main-area">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('ユーザー情報編集画面') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('user.update') }}">
                    @csrf

                    <div class="row register-input-area">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('名前') }}</label>

                        <div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user_info['name'] }}" required autocomplete="name" autofocus> @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row register-input-area">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user_info['email'] }}" required autocomplete="email"> @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row register-input-area">
                        <label for="tel" class="col-md-4 col-form-label text-md-end">{{ __('電話番号 ※ハイフン無し') }}</label>

                        <div>
                            <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ $user_info['tel'] }}" required autocomplete="tel"> @error('tel')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                        </div>
                    </div>

                    <div class="row regis-btn-area">
                        <button type="submit" class="btn btn-primary">{{ __('更新') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection