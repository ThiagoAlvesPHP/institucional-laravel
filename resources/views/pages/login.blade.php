<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="keywords" content="{{ $data['config']->keywords ?? '' }}"/>
        <meta property="og:description" content="{{ $data['config']->text ?? '' }}">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ $data['config']->title ?? '' }}">
        <meta name="author" content="{{ $data['config']->name ?? '' }}">
        <meta property="og:url" content="{{Request::url()}}">
        <meta property="ia:markup_url" content={{Request::url()}}">
        <meta property="og:title" content="{{ $data['config']->title ?? '' }}">
        <meta property="og:image" content="{{ asset('assets/'.$data['config']->logo_dark) }}">
        <meta property="og:image:alt" content="{{ $data['config']->title ?? '' }}">

        @foreach ($metas as $value)
            <meta property="{{ $value->property ?? '' }}" content="{{ $value->content ?? '' }}">
        @endforeach

        <title>{{ $data['config']->title ?? '' }}</title>

        <link rel="icon" href="{{ asset('assets/'.$data['config']->favicon ?? '') }}" type="image/x-icon"/>

        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet/less" type="text/css" href="{{asset('assets/css/styles.less')}}" />
        <script src="{{ asset('assets/js/jquery.min.js'); }}"></script>
    </head>
<body>

    <main class="login">
        <section class="form-login">
            <div class="logo">
                <img src="{{ asset('assets/'.$data['config']->logo) }}" width="150" alt="{{$data['config']->name ?? ''}}">
            </div>
            @if (session('warning'))
                <div class="alert">
                    {{ __(session('warning')) }}
                </div>
            @endif
            <form action="{{route('auth')}}" method="post">
                @csrf
                <label for="email">{{__('Email')}}</label>
                <input type="email" name="email" required class="input @error('email') is-invalid @enderror" value="{{ old('email') }}">
                <label for="password">{{__('Password')}}</label>
                <input type="password" name="password" required class="input @error('password') is-invalid @enderror" value="{{ old('password') }}">
                <button class="btn link">Enviar</button>
            </form>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/less"></script>
</body>
</html>
