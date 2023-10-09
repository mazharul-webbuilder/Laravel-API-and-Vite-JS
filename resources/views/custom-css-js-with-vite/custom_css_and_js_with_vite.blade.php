<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Asset with vite js</title>
    {{--Without using vite--}}
{{--    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">--}}
{{--    <script src="{{asset('asset/js/main.js')}}"> </script>--}}

{{--    Using Vite--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<h1 class="text-center">This is heading</h1>

</body>
</html>
