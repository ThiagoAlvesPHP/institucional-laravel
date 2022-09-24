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
    <meta property="og:image" content="{{ asset('assets/images/template.png') }}">
    <meta property="og:image:alt" content="{{ $data['config']->title ?? '' }}">

    @foreach ($metas as $value)
        <meta property="{{ $value->property ?? '' }}" content="{{ $value->content ?? '' }}">
    @endforeach

    <title>{{ $data['config']->title ?? '' }}</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet/less" type="text/css" href="{{asset('assets/css/styles.less')}}" />
    <script src="{{ asset('assets/js/jquery.min.js'); }}"></script>
</head>

<body>
    <x-site.nav :data=$config />

    <main class="main">
        @yield('content')
    </main>

    <x-site.whatsapp :data=$config />

    <x-site.footer :data=$config :configSocial=$config_social/>
</body>

</html>
