@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
@if (!empty($msg))
<div class="alert alert-success"><?=$msg?></div>
@endif
<div class="form-wrap">
               
                <div class="panel-heading text-center font-weight-bold">ADD VIDEO</div>
                
                <div class="panel-body">
<form  role="form" method="POST" action="{{ url('/signup') }}">
                        {!! csrf_field() !!}
                        
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label>Title</label>

                            
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Submit
                                </button>
                            </div>
                        </div>
</form>
                </div>
</div>

@endsection
