@extends('layouts.app')@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/contact.css') }}">
<div id="main-area">
    <div class="contact-title">お問い合わせ</div>
    <form method="POST" class="form-horizontal" action="{{ route('contact.confirm') }}">
        @csrf
        <div class="form-group">
            <label class="control-label" for="input-email">メールアドレス</label>
            <input name="email" id="input-email" class="form-control" value="{{ old('email') }}" type="text"> @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label" for="input-title">タイトル</label>
            <input name="title" id="input-title" class="form-control" value="{{ old('title') }}" type="text"> @if ($errors->has('title'))
            <p class="error-message">{{ $errors->first('title') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label" for="input-body">お問い合わせ内容</label>
            <textarea name="body" id="input-body" class="form-control" rows="15">{{ old('body') }}</textarea> @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
        </div>

        <div class="form-group">
            <div class="btn-area">
                <button type="submit">入力内容確認</button>
            </div>
        </div>
    </form>
</div>
@endsection
