<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getMetaTitle() }} - Zingmydeal</title>
        <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
        <meta name="description" content="{{ Theme::getMetaDescription() }}">
        <meta name="tags" content="{{ Theme::getMetaTag() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700&display=swap" rel="stylesheet">

        {!! Theme::asset()->styles() !!}
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        {!! Theme::asset()->scripts() !!}
    </head>
    <body class="organic-body product-6col">
       
        {!! Theme::partial('header1') !!}
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>