@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')   
<?php 
  $listCount = count($videos);
  if($listCount>0){
      ?>
<div class="btn-top-right" align="right"><button type="button"  onclick="window.location.href='/addVideo'" class="btn btn-primary">Add Video</button></div>

<div class="table-responsive">
  <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">URL</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videos as $video) { ?>
                <tr>
                    <th><?=$video->id?></th>
                    <td><?= str_limit($video->title, 20, '...')?></td>
                    <td><?= str_limit($video->url, 50, '...')?></td>
                    <td><?= str_limit($video->description, 20, '...')?></td>
                    <td><a href="/viewVideo">View&nbsp;</a><a href="/editVideo">Edit&nbsp;</a><a href="/deleteVideo">Delete&nbsp;</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
  <?php 
  }else{?>
<div>No data found!  <a href="/addVideo">Add new first video</a></div>
  <?php }
?>


@endsection
