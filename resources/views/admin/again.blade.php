@extends('layouts.app')

@section('content')
<div style="width:70%;margin:auto;" class="full">
<form action="{{url('/edit/update/again')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputName">Edit title</label>
    <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$lathi->about_title}}" name="about_title" required>
	<input type="hidden" name="hiddenin" value="{{$lathi->id}}" />
    
  </div>
  <div class="form-group">
  <label for="comment">Edit content</label>
  <textarea class="form-control" rows="5" id="comment" name="about_content" required>{{$lathi->about_content}} </textarea>
</div>
  <div class="form-group">
    <label for="exampleInputEmail">Edit point</label>
    <input type="name" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="{{$lathi->about_point}}" name="about_point" required>
    
  </div>
  
  
  <button type="submit" class="btn btn-default">edit</button>
</form>
</div>
@endsection

@section('content3')
 About Edit Section
@endsection
