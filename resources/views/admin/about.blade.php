@extends('layouts.app')

@section('content')
<div class="fullform" style="width:80%;margin:auto;">
<div class="container-left" style="width:50%;float:left">
<div class="card">
  <div class="card-header ">
    <button class="btn btn-danger">Please read it carefully</button>
  </div>
  <div class="card-body">
    For any query, please contact Bashar at 01834663387 or see the documentation & site tour.
  </div>
</div>
    <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>About Title</th>
        <th>About Content</th>
        
        <th>About point</th>
        <th>About status</th>
        <th>Active</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
	@foreach($pagol as $pagli)
	 <tr>
	  <td>{{$pagli->about_title}}</td>
	  <td>{{$pagli->about_content}}</td>
	  
	  <td>{{$pagli->about_point}}</td>
	  <td>{{$pagli->about_status}}</td>
	  @if($pagli->about_status == 1)
	  <td><a href="{{url('/about/idtake')}}/{{$pagli->id}}">Activate</a></td>
	  @endif
	  @if($pagli->about_status == 2)
	  <td>Active</td>
	  @endif
	  <td><a href="{{url('/about/again/edit')}}/{{$pagli->id}}">Edit</a></td>
	  </tr>
	@endforeach
      
	  
	  
    </tbody>
  </table>
</div>
<div class="container-right" style="width:40%;float:right">
<div class="formgb" style="background:#81ecec;padding:30px;">
    <form action="{{url('/abouteditinfo')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputName">About Title</label>
    <input type="name" class="form-control a" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter title" value="" name="abouttitle" >
	<input type="hidden" name="" value="" />
    
  </div>
  <div class="form-group">
    <label for="exampleInputName"> About Point</label>
    <input type="name" class="form-control b" id="exampleInputpoint" aria-describedby="emailHelp" placeholder="Enter point" value="" name="aboutpoint" >
	
    
  </div>
  <div class="form-group">
    <label for="exampleInputName"> About Image</label>
    <input type="file" class="form-control c" id="exampleInputpoint" aria-describedby="emailHelp"   name="againfile" >
	
    
  </div>
  
  <div class="form-group">
  <label for="comment"> about content</label>
  <textarea class="form-control d" rows="5" id="comment" name="aboutcontent" ></textarea>
</div>
  
  
  <button type="submit" class="btn btn-info fg">Add</button>
</form>
</div>
<div class="formgb" style="background:#81ecec;padding:30px;margin-top:30px;">
 <form action="{{url('/pointinput')}}" method="POST">
 @csrf
           <div class="form-group">
  <label for="sel1">Select a particualr about section:</label>
  <select class="form-control" id="sel1" name="selectin">
  @foreach($pagol as $pagli)
       <option value="{{$pagli->id}}">{{$pagli->about_title}}</option>
  @endforeach
    </div>
    
  </select>
  <div class="form-group">
    <label for="exampleInputName">Add New Point </label>
    <input type="name" class="form-control g" id="exampleInputpoint" aria-describedby="emailHelp" placeholder="Enter point" value="" name="enterpoint" >
	
    
  </div>
  <button type="submit" class="btn btn-info jj">Add</button>
  </form>
</div>
</div>
</div>

@endsection
@section('footerscript')
<script type="text/javascript">
jQuery('.fg').click(function(){
	var a = jQuery('.a').val();
	var b = jQuery('.b').val();
	var c = jQuery('.c').val();
	var d = jQuery('.d').val();
	if(a != '' && b != '' && c != '' && d != ''){
		alert('Added');
	}
	else if (a == '' || b == '' || c == '' || d == ''){
		alert('Field Required');
		return false;
	}
	
});
</script>
<script type="text/javascript">
jQuery('.jj').click(function(){
	var a = jQuery('.g').val();

	if(a != ''){
		alert('Added');
	}
	else if (a == ''){
		alert('Field Required');
		return false;
	}
	
});
</script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
@endsection
@section('content3')
 About Section
@endsection
@section('content4')
 About Section
@endsection
@section('about')
 active
@endsection
@section('content5')
 Handle Your Homepage About Section
@endsection
