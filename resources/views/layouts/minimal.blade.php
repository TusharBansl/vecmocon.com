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
 <title>{{ 'error' ?? $title }}</title>
 <link rel="shortcut icon" href="favicon.ico">

 {{-- all styles are provided at runtime --}}
@yield('pre')

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body id="{{ $id ?? 'mini-page' }}" class="{{ $style ?? '' }}">

    {{--  site content  --}}
    @yield('content')
      
    @yield('post')
</body>
</html>
 