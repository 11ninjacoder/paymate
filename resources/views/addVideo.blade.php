@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
@if (!empty($msg))
<div class="alert alert-success"><?=$msg?></div>
@endif
<div class="form-wrap">
    <div align="right"><button type="button"  onclick="window.location.href='/dashboard'" class="btn btn-danger">Cancel</button></div>
                <div class="panel-heading text-center font-weight-bold">VIDEO</div>
                
                <div class="panel-body">
<form  role="form" method="POST" action="{{ url('/addVideo') }}">
                        {!! csrf_field() !!}
                        
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label>Title</label>

                            
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="error-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        
                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label>Video Link URL</label>

                            
                                <input type="text" class="form-control" name="url" value="{{ old('url') }}">

                                @if ($errors->has('url'))
                                    <span class="error-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        
                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label>Description</label>

                                
                                <textarea name="description" class="form-control" cols="10"  rows="10">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="error-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Submit
                                </button>
                                <button type="button" onclick="window.location.href='/dashboard'" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
</form>
                </div>
</div>

@endsection
