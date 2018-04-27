
@extends('layouts.master')
@section('title', 'Login')
   
@section('content')
<link href="{{ asset('css/sing_up.css') }}" rel="stylesheet">
<div class="row signup-header"><div class="col-md-4">Paymate</div><div class="col-md-4"></div><div class="col-md-4 text-right"><div class="header-link"><a href="/signup">Sign Up</a> <a href="/login">log In</a></div></div></div>
<div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-div">
            <div class="panel panel-default">
                <div class="panel-heading text-center font-weight-bold">Login</div>
                
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login-success') }}">
                        {!! csrf_field() !!}

                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-12 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Login
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
</div>
@endsection



		

