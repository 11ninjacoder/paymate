@extends('layouts.master')
@section('title', 'Dashboard')
   
@section('content')   
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<div class="row signup-header"><div class="col-md-4">Paymate</div><div class="col-md-4"></div><div class="col-md-4"></div></div>
<div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center text-capitalize"><div style="color: white">Welcome! <br><a  href="/signup"><span style="color: white">Go back</span></a></div></div>
        <div class="col-md-4"></div>
</div>
@endsection
