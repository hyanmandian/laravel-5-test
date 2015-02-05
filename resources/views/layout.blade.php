<!doctype html>
<html lang="{{{ Config::get('app')['locale'] }}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CMS {{{ isset($pageTitle) ? "|" . $pageTitle : "" }}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script> var BASEURL = "{{ URL::to('/') }}"; </script>
    </head>
    <body>

        @yield('content')

    </body>
</html>