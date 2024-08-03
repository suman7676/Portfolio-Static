




//
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Suman Ahammed</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="og:site_name" content="">
    <meta name="og:url" content="">
    <meta name="og:title" content="">
    <meta name="og:description" content="">
    <meta name="og:image" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-tailwind.png')}}">
    <script src="{{asset('js/axios.main.js')}}"></script>
</head>

<body >
<div class="" id="content">
    @include("layout.Header")

    @yield("content")

    @include("layout.Footer")

</div>

<script src="{{asset('js/main.js')}}"></script>
</body>


</html>

