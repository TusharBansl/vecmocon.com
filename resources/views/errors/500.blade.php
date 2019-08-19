
@extends('layouts.minimal',[
  'title' => 'ERROR',
  'id'=>'error-page'
])

@section('pre')
@include('toolbox.errStyle')
@endsection

@section('content')
@include('toolbox.errMsg',[
  'code' => 500,
  'msg' => 'Internal Server Error.',
])
@endsection