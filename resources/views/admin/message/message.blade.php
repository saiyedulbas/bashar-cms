@extends('layouts/app')

@section('content')
<div style="width:70%;margin:auto;" class="full">
<div class="aral" style="display:none;">
Are you sure you want to delete?
</div>
<div class="card">
  <div class="card-header ">
    <button class="btn btn-danger">Please read it carefully</button>
  </div>
  <div class="card-body">
    For any query, please contact Bashar at 01834663387 or see the documentation & site tour.
  </div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Sender Name</th>
        <th>Sender Email</th>
        <th>Text</th>
        <th>Time</th>
        
        <th>Delete</th>
		<th>Updated at</th>
      </tr>
    </thead>
    <tbody>
      @forelse($dis as $info)
	  <tr>
	  @if($info->message_status == 1)
	  <td>{{$info->sender_name}}</td>
         @else
			<td style="background:#4e73df;color:#fff">{{$info->sender_name}}</td> 
	  @endif
	  
	  <td>{{$info->sender_email}}</td>
	  <td>{{$info->sender_message}}</td>
	  <td>{{$info->created_at}}</td>
	  <td><a tota="{{$info->id}}" class="monadelete" href="{{url('/contact/delete')}}/{{$info->id}}">Delete </a>|
	  <a href="{{url('/contact/edit')}}/{{$info->id}}"> Edit </a> |
	  @if($info->message_status == 1)
		 <a href="{{url('/contact/mark')}}/{{$info->id}}"> Mark as read </a> |
		 
	  @endif
	  
	  
	  </td>
	  @if($info->updated_at != NULL)
	  <td>{{$info->updated_at->diffForHumans()}}
	  
	  </td>
	  @else
		  <td>not updated yet
	  
	  </td>
	  @endif
	  
	  </tr>
	  @empty
	  <tr>
	  <td colspan="6">There are no values</td>
	  </tr>
	  @endforelse
    </tbody>
  </table>
  {{$dis->links()}}
  <h2>Deleted Messages</h2>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sender Name</th>
        <th>Sender Email</th>
        <th>Text</th>
        <th>Time</th>
        <th>Restore</th>
        
        
		
      </tr>
    </thead>
    <tbody>
      @foreach($bagi as $infoo)
	  <tr>
	  @if($infoo->message_status == 1)
	  <td>{{$infoo->sender_name}}</td>
         @else
			<td style="background:#4e73df;color:#fff">{{$infoo->sender_name}}</td> 
	  @endif
	  
	  <td>{{$infoo->sender_email}}</td>
	  <td>{{$infoo->sender_message}}</td>
	  <td>{{$infoo->created_at}}</td>
	  <td><a href="{{url('/mesage/restore')}}/{{$infoo->id}}">Restore</a></td>
	  
	  
	  
	  </tr>
	  @endforeach
    </tbody>
  </table>
  
  </div>

@endsection
@section('footerscript')
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.monadelete').click(function(){
		var tina = jQuery(this).attr('tota');
		var aba = jQuery(this).attr('href');
		jQuery('.aral').dialog({
			'title':'alert',
			'modal':true,
			'buttons':{
				'close':function(){
					jQuery('.aral').dialog('close');
				},
				'yes':function(){
					window.location.href= aba;
					jQuery('.aral').dialog('close');
				}
			}
		});
		return false;
	});
});
</script>
@endsection
@section('content3')
 Message Section
@endsection
@section('content4')
 Message Section
@endsection
@section('message')
 active
@endsection
@section('content5')
 Handle Your Homepage Contact Form Message Section
@endsection