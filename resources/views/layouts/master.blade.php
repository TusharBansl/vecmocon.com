{{-- 
html tag
head
  >> meta 
      initial window setup > scale
      language >> layout >> unicode utf-8
      compatibility
      authors 
      keywords
  >> title
                      text  << cp  << per page
                      fav-icon << cp  << global
  >> relative links & imports
      css files 
      
  >> fallback function for cross browser compatability
      SHIM
body
  >> content of the page << inserted

  >> script includes << hardwired

 --}}

 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    
    {{-- meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="Vecmocon Technologies Pvt Ltd">
    <meta name="keywords" content="">

    {{-- title --}}
    <title>{{ $title ?? 'Vecmocon Technologies' }}</title>
    <link rel="shortcut icon" href="favicon.ico">
    
    {{-- css includes --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    {{-- webfonts --}}
    @if(Config::has('site.pref.layout.webfont'))

      @include('toolbox.fontImport',[
        'googlefont' => Config('site.pref.layout.webfont')
      ])
      
    @endif

    {{-- <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Lora:700&display=swap" rel="stylesheet"> --}}
    {{-- <style> .fontclass { font-family: 'Dosis', 'sans-serif'; } </style> --}}
    
    @yield('extracss')

    {{-- fallback --}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="{{ $id ?? 'home-page'}}" class="{{ $style ?? '' }}">

  @yield('content')

  {{-- Script include --}}
  <script src="{{mix('/js/app.js')}}"></script>
  @yield('extrajs')
  
  </body>
</html>