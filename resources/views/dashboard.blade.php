@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')   
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<div class="row signup-header"><div class="col-md-4">Paymate</div><div class="col-md-4"></div><div class="col-md-4 text-right"><div class="header-link"><a href="/logout">Log Out</a></div></div></div>

    <div class="row profile">
            <div class="col-md-3 profile-menu">
                
                        <div class="col-md-12 profile-userpic">
                    
                    
                                <!-- SIDEBAR USERPIC -->
                                <div class=" text-center">
                                        <img src="{{ URL::to('/') }}/images/profile_user.jpg" class="img-responsive" alt="">
                                </div>
                                <!-- END SIDEBAR USERPIC -->
                        </div>
                    <div class="profile-sidebar">
                            
                            
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                    <div class="profile-usertitle-name text-capitalize mark">
                                            @if (Session::has('name'))
                                              <?=Session::get('name')?>
                                            @endif
                                    </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                    <ul class="nav navbar-nav">
                                            <li>
                                                    <a href="#">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                    Add Video </a>
                                            </li>
                                            <li>
                                                 
                                            </li>
                                            
                                    </ul>
                            </div>
                            <!-- END MENU -->
                    </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                       <div style="color: white">Welcome! </div>
                </div>
            </div>
    </div>
@endsection
