
@extends('layouts.minimal',[
  'title' => 'ERROR',
  'id'=>'error-page'
])

@section('pre')
@include('toolbox.errStyle')
@endsection

@section('content')
@include('toolbox.errMsg',[
  'code' => 403,
  'msg' => 'Forbidden.',
  'link' => 1
])
@endsection