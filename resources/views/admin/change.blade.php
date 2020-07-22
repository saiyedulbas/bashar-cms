@extends('layouts.app')

@section('content')

<div class="fullform" style="width:80%;margin:auto;">
@if(session('smoke'))
	<div class="alert alert-danger">
	{{session('smoke')}}
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
  <div class="card-header ">
    <button class="btn btn-danger">Please read it carefully</button>
  </div>
  <div class="card-body">
    To change password, you need Bashar's permission. Just contact Bashar at 01834663387 and he will give you access within 20 seconds. Thank you.
  </div>
</div>
<div class="formgb" style="background:#81ecec;padding:30px;">
    <form action="{{url('/change/password/again')}}" method="POST" >
@csrf
  <div class="form-group">
    <label for="exampleInputName">Old Password</label>
    <input type="password" class="form-control" id="exampleInputName" aria-describedby="emailHelp"   name="oldpassword" value="{{old('oldpassword')}}" disabled>
	<input type="hidden" name="" value="" />
    
  </div>
  <div class="form-group">
    <label for="exampleInputName">New password</label>
    <input type="password" class="form-control" id="exampleInputpoint" aria-describedby="emailHelp"  name="newpassword" value="{{old('newpassword')}}" disabled>
	
    
  </div>
  <div class="form-group">
    <label for="exampleInputName">Confirm password</label>
    <input type="password" class="form-control" id="exampleInputpoint" aria-describedby="emailHelp"   name="confirmpassword" value="{{old('confirmpassword')}}" disabled>
	
    
  </div>
  
  
  
  
  <button type="submit" class="btn btn-danger" disabled>change</button>
</form>
</div>

</div>

@endsection
@section('content4')
 Change your password
@endsection
@section('content3')
 Change Password
@endsection
@section('content5')
 Change Your Password
@endsection

