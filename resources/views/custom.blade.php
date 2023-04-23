@php 
    $myAsset = asset('custom'); 
@endphp
@extends('layouts.custom')
@section('title')
  Từ Ngọc Vân
@endsection
@section('header')
  @parent  
@endsection
@section('main')
  @include('parts.custom.main') 
@endsection
@section('footer')
  @parent  
@endsection
@section('css')  
        <link href="{{ $myAsset.'/css/reset.css' }}" rel="stylesheet" />               
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />               
        <link href="{{ $myAsset.'/css/custom.css' }}" rel="stylesheet" />               
@endsection
@section('js')
        <script src="{{ $myAsset.'/js/custom.js' }} "></script>
@endsection