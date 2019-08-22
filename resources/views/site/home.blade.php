@extends('layouts.master',[
  'title' => 'vecmocon-home'
])

@section('content')
@include('sections.navigation', [
  'data' => Config('site.nav.nav1')
])


@endsection