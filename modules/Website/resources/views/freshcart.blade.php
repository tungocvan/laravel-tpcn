@php 
    $myAsset = asset('freshcart'); 
@endphp
@extends('Website::layouts.freshcart')
@section('title')
  Từ Ngọc Vân
@endsection
@section('header')
  @parent  
@endsection
@section('main')
  @include('Website::parts.main-freshcart') 
@endsection
@section('footer')
  @parent  
@endsection
@section('css')           
        <link rel="stylesheet" href="{{ $myAsset.'/css/theme.min.css' }}" />
@endsection
@section('js')
        <script src="{{ $myAsset.'/libs/jquery/dist/jquery.min.js' }} "></script>
        <script src="{{ $myAsset.'/libs/bootstrap/dist/js/bootstrap.bundle.min.js' }} "></script>           
        <script src="{{ $myAsset.'/js/theme.min.js' }} "></script>
@endsection