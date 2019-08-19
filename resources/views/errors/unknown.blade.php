@extends('layouts.minimal',[
  'title' => 'ERROR',
  'id'=>'error-page'
])

@section('pre')
@include('toolbox.errStyle')
@endsection

@section('content')
@include('toolbox.errMsg',[
  'code' => 'Unknown Error',
  'msg' => 'Try After Some Time.',
  'link' => 1,
])
@endsection