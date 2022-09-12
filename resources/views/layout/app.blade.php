<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Institucional</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet/less" type="text/css" href="assets/css/styles.less" />
    <script src="assets/js/jquery.min.js"></script>
</head>

<body>
    <x-site.nav :data=$config />

    <main class="main">
        @yield('content')
    </main>

    <x-site.whatsapp />

    <x-site.footer :data=$config :configSocial=$config_social/>
</body>

</html>
