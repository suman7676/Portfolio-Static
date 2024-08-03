
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Suman Ahammed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="og:site_name" content="">
    <meta name="og:url" content="">
    <meta name="og:title" content="">
    <meta name="og:description" content="">
    <meta name="og:image" content="">
    <meta name="author" content="">

    <script src="{{asset('js/axios.main.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


    @vite('resources/css/app.css')
</head>
<body>
<div class="" id="content">
    @include("layout.Header")

    @yield("content")

    @include("layout.Footer")

</div>
</body>
</html>
