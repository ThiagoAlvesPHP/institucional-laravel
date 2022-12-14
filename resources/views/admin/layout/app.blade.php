<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data['config']->title ?? ''; }}</title>
    <link rel="stylesheet/less" type="text/css" href="{{ URL::asset('assets/css/admin/styles.less') }}" />
    <link href="{{ URL::asset('assets/libs/bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
</head>

<body>
    <x-admin.nav />

    <main class="container-fluid">
        <div class="row">
            <x-admin.nav-left />

            @yield('content')
        </div>
    </main>

    <x-admin.footer />
</body>

</html>
