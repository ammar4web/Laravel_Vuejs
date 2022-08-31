<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD_Laravel_VueJs</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="module" src="{{ asset('js/app.js') }}" defer></script>
    {{--
        dever: خاصية منطقية تُشير إلى أنَّ على المتصفح تنفيذ هذه السكربت بعد تفسير بقية المستند.
        https://wiki.hsoub.com/HTML/script#defer
    --}}
</head>

<body>

    <div id="app"></div>
</body>

</html>
