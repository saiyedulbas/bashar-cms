@extends('layouts/app')

@section('content')
<div style="width:70%;margin:auto;" class="full">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{url('/contact/update')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputName">Edit name</label>
    <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$lathi->sender_name}}" name="sender_name" required>
	<input type="hidden" name="hiddenin" value="{{$lathi->id}}" />
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Edit Email</label>
    <input type="name" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="{{$lathi->sender_email}}" name="sender_email" required>
    
  </div>
  
  
  <button type="submit" class="btn btn-default">edit</button>
</form>
  
  </div>

@endsection
@section('content3')
 Message Edit  Section
@endsection
