@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/contact.css') }}">
<div id="main-area">
    <div class="contact-title">お問い合わせ</div>
    <form method="POST" class="form-horizontal" action="{{ route('contact.send') }}">
        @csrf
        <div class="form-group">
            <label class="control-label" for="input-email">メールアドレス</label> {{ $inputs['email'] }}
            <input name="email" id="input-email" class="form-control" value="{{ $inputs['email'] }}" type="hidden">
        </div>
        <div class="form-group">

            <label class="control-label" for="input-title">タイトル</label> {{ $inputs['title'] }}
            <input name="title" id="input-title" class="form-control" value="{{ $inputs['title'] }}" type="hidden">
        </div>
        <div class="form-group">
            <label class="control-label" for="input-body">お問い合わせ内容</label> {!! nl2br(e($inputs['body'])) !!}
            <input name="body" id="input-body" class="form-control" value="{{ $inputs['body'] }}" type="hidden">
        </div>
        <div class="form-group">
            <div class="btn-area">
                <button type="submit" name="action" value="back">入力内容修正</button>
                <button type="submit" name="action" value="submit">送信する</button>
            </div>
        </div>
    </form>
</div>
@endsection
