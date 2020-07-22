<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\againmessage;
use carbon\carbon;
use App\about;
use App\about_point;
use App\service;
class bashar extends Controller
{
    function ami(){
		return view('index');
	}
	function tumi(){
		return view('front/team');
	}
	function amra(){
		$first = $_POST['sender_name'];
		$second = $_POST['sender_email'];
		$third = $_POST['sender_message'];
		againmessage::insert([
		   'sender_name' => $first,
		   'sender_email' => $second,
		   'sender_message' => $third,
		   'created_at' => now('Asia/Dhaka'),
		]);
		return back()->with('status','Your message successfully sent');
	}
	public function aboutsection(){
		$din = about::where('about_status','=',2)->firstOrFail();
		$jhula = service::where('service_status','=',1)->orderBy('id','desc')->paginate(3);
		$jhima = about_point::where('about_id','=',$din->id)->get();
		return view('index',compact('din','jhima','jhula'));
	}
	
	
	
	
}
