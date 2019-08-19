
@extends('layouts.minimal',[
  'title' => 'ERROR',
  'id'=>'error-page'
])

@section('pre')
@include('toolbox.errStyle')
@endsection

@section('content')
@include('toolbox.errMsg',[
  'code' => 503,
  'msg' => 'Service Unavailable.',
  'link' => 1
])
@endsection