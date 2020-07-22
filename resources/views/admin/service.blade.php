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
    <table class="table table-striped" id="servicetable">
    <thead>
      <tr>
        <th>Service Title</th>
        <th>Service Content</th>
        <th>Service Status</th>
        
        
        <th>Service Photo</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
	@foreach($pagol as $pagli)
	 <tr>
	  <td>{{$pagli->service_title}}</td>
	  <td>{{$pagli->service_details}}</td>
	  
	  
	  
	  @if($pagli->service_status == 1)
	  <td>Active</td>
	  @endif
	  @if($pagli->service_status == 2)
	  <td>Deactive</td>
	  @endif
	  <td><img style="width:50px;height:50px" src="{{asset('/bingo')}}/{{$pagli->service_image}}" /></td>
	   @if($pagli->service_status == 1)
	  <td><a href="{{url('/servicedeactive')}}/{{$pagli->id}}">Deactivate</a></td>
	  @endif
	  @if($pagli->service_status == 2)
	  <td><a href="{{url('/serviceactiveon')}}/{{$pagli->id}}">Activate</a></td>
	  @endif
	  </tr>
	@endforeach
      
	  
	  
    </tbody>
  </table>
</div>
<div class="container-right" style="width:40%;float:right">
<div class="formgb" style="background:#81ecec;padding:30px;">
    <form action="{{url('/serviceactive')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputName">Service Title</label>
    <input type="name" class="form-control a" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter title" value="" name="servicetitle" required>
	<input type="hidden" name="" value="" />
    
  </div>
  
  
  <div class="form-group">
  <label for="comment">Service content</label>
  <textarea class="form-control b" rows="5" id="comment" name="servicecontent"></textarea>
</div>

<div class="form-group">
  <label for="comment">Service Image</label>
  <input type="file" class="form-control c" name="fileinput" />
</div>
  
  
  <button type="submit" class="btn btn-info kk">Add</button>
</form>
</div>

</div>
</div>

@endsection
@section('footerscript')
<script type="text/javascript">
jQuery('.kk').click(function(){
	var a = jQuery('.a').val();
	var b = jQuery('.b').val();
	var c = jQuery('.c').val();
	
	if(a != '' && b != '' && c != ''){
		alert('Added');
	}
	else if (a == '' || b == '' || c == ''){
		alert('Field Required');
		return false;
	}
	
});
</script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#servicetable').DataTable();
} );
	</script>
@endsection
@section('content3')
 Service Section
@endsection
@section('content4')
 Service Section
@endsection
@section('service')
active
@endsection
@section('content5')
 Handle Your Homepage Service Section
@endsection
