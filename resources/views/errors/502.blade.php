
@extends('layouts.minimal',[
  'title' => 'ERROR',
  'id'=>'error-page'
])

@section('pre')
@include('toolbox.errStyle')
@endsection

@section('content')
@include('toolbox.errMsg',[
  'code' => 502,
  'msg' => 'Bad Gateway.',
  'link' => 1
])
@endsection