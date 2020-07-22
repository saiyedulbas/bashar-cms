@extends('layouts/app')

@section('content')
<div style="width:70%;margin:auto;" class="full">
<div class="card">
  <div class="card-header ">
    <button class="btn btn-danger">Please read it carefully</button>
  </div>
  <div class="card-body">
    For any query, please contact Bashar at 01834663387 or see the documentation & site tour.
  </div>
</div>
<form action="{{url('/profile/update')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="exampleInputName">Update name</label>
    <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Update Name" value="{{Auth::user()->name}}" name="user_name" required>
	<input type="hidden" name="birla" value="{{Auth::user()->id}}" />
    
  </div>
  
<div class="form-group">
    <label for="exampleInputName">Upload your photo </label>
    <input type="file" class="form-control" id="exampleInputpoint" aria-describedby="emailHelp"   name="subjective" required>
	
    
  </div>
  <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>
@endsection
@section('content3')
 Update Profile
@endsection
@section('content4')
 Update Profile Section
@endsection
@section('update')
 active
@endsection
@section('content5')
Update Your Profile
@endsection
