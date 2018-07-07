@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="form-wrap">
    <div align="right"><button type="button"  onclick="window.location.href='/dashboard'" class="btn btn-success">Video List</button></div>
                <div class="panel-heading text-center font-weight-bold"></div>
                
                <div class="panel-body">
<form  role="form" >
                        <div class="form-group">
                           <label><b>Title:</b> <?=$videos->title;?></label>
                        </div>
                        
                        <div class="form-group">
                           <label><b>Video Link URL:</b> <?=$videos->url;?></label>
                        </div>
                        
                        <div class="form-group">
                           <label><b>Description:</b> <?=$videos->description;?></label>
                        </div>

                        
</form>
                </div>
</div>

@endsection
