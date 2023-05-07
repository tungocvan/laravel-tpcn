@php 
    $myAsset = asset('custom'); 
@endphp
@extends('layouts.boostrap')
@section('title')
  Từ Ngọc Vân
@endsection

@section('main')
    @include('Posts::lists')
@endsection

@section('css')          
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"  rel="stylesheet" >
        {{-- <link href="{{ $myAsset.'/css/custom.css' }}" rel="stylesheet" />  --}}
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" /> 

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
{{-- <script src="{{ $myAsset.'/js/custom.js' }} "></script> --}}
<script src="/plugin/ckeditor/ckeditor.js"></script>
@yield('scripts')
@endsection