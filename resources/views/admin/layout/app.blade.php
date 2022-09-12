<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Institucional</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet/less" type="text/css" href="{{ URL::asset('assets/css/admin/styles.less') }}" />
    <link href="{{ URL::asset('assets/libs/bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
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
