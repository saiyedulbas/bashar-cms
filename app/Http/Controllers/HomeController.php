<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\againmessage;
use App\about;
use carbon\carbon;
use App\about_point;
use App\service;
use Auth;
use Hash;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	public function aboutsectionultra(){
		$pagol = about::all();
		return view('admin/about',compact('pagol'));
	}
	public function contactmessageview(){
		$dis = againmessage::paginate(2);
		$bagi = againmessage::onlyTrashed()->get();
		return view('admin/message/message',compact('dis','bagi'));
	}
	public function contactdelete($zind){
		againmessage::where('id','=',$zind)->delete();
		return back();
	}
	public function contactmark($zind){
		againmessage::where('id','=',$zind)->update([
			'message_status' => 2
		]);
		return back();
	}
	public function contactedit($zind){
		$lathi = againmessage::findOrFail($zind);
		
		return view('admin/message/edit',compact('lathi'));
		
	}
	public function contactupdate(Request $request){
		$request->validate([
		 'sender_name' => 'required',
		 'sender_email' => 'required|email',
		]);
		$first = $request->sender_name;
		$second = $request->sender_email;
		$third = $request->hiddenin;
		againmessage::where('id','=',$third)->update([
			'sender_name' => $first,
			'sender_email' => $second,
			
		]);
		return back();
		
	}
	public function abouteditinfo(Request $request){
		$first = $request->abouttitle;
		$second = $request->aboutcontent;
		$third = $request->aboutpoint;
		$tuna = about::insertGetId([
		    'about_title' => $first,
			'about_content' => $second,
			'about_point' => $third,
			'created_at' => carbon::now(),
		]);
		if($request->hasFile('againfile')){
			   $path = $request->file('againfile')->store('about_images');
			   about::where('id','=',$tuna)->update([
			          'about_image' => $path
			   ]);
			return back();
		}
		return back();
	}
	public function aboutidtake($mina){
		about::where('about_status','=',2)->update([
		      'about_status' => 1
		]);
		about::where('id','=',$mina)->update([
		      'about_status' => 2
		]);
		return back();
	}
	public function pointinput(){
		$first = $_POST['selectin'];
		$second = $_POST['enterpoint'];
		about_point::insert([
		     'about_id' => $first,
			 'point' => $second,
			 'created_at' => carbon::now(),
		]);
		return back();
	}
	public function mesagerestore($restoreid){
		againmessage::where('id','=',$restoreid)->restore();
		return back();
	}
	public function aboutagainedit($zinda){
		$lathi = about::where('id','=',$zinda)->firstOrFail();
		
		return view('admin/again',compact('lathi'));
	}
	public function editupdateagain(Request $request){
		$first = $request->about_title;
		$second = $request->about_content;
		$third = $request->about_point;
		$fourth = $request->hiddenin;
		about::where('id','=',$fourth)->update([
		     'about_title' => $first,
             'about_content' => $second,
			 'about_point' => $third,
			 ]);
			 return back();
	}
	public function servicesection(){
		$pagol = service::all();
		return view('admin/service',compact('pagol'));
		
	}
	public function serviceactive(Request $request){
		$first = $request->servicetitle;
		$second = $request->servicecontent;
		$sixth = service::insertGetId([
		     'service_title' => $first,
			 'service_details' => $second,
			 'created_at' => carbon::now(),
		]);
		if($request->hasFile('fileinput')){
		$path = $request->file('fileinput')->store('service_images');
		service::where('id','=',$sixth)->update([
		     'service_image' => $path 
		]);

        return back();
		}
		
		return back();
	}
	public function serviceactiveon($jibon){
		service::where('id','=',$jibon)->update([
		       'service_status' => 1
		]);
		return back();
	}
	public function servicedeactive($jibona){
		service::where('id','=',$jibona)->update([
		       'service_status' => 2
		]);
		return back();
	}
	public function passwordchange(){
		return view('admin/change');
	}
	public function changepasswordagain(Request $request){
		     
			  $request->validate([
			     'oldpassword' => 'required',
			     'newpassword' => 'required',
			     'confirmpassword' => 'required|same:newpassword',
				 
			  ]);
			 if(Hash::check($request->oldpassword,Auth::user()->password)){
				 User::where('id','=',Auth::user()->id)->update([
				       'password' => bcrypt($request->newpassword),
				 ]);
				 return back()->with('smoke','your password has been changed successfully');
			 }
		else{
			return back()->withErrors('old password does not match');
		}
	}
	function uploadphoto(){
		return view('admin/upload');
	}
	public function profileupdate(Request $request){
		$first = $request->user_name;
		
		$third = $request->birla;
		User::where('id','=',$third)->update([
		    'name' => $first,
		]);
		if($request->hasFile('subjective')){
			$path = $request->file('subjective')->store('user_images');
			User::where('id','=',$third)->update([
			    'photo' => $path,
			]);
			return back();
			
		}
		return back();
		
	}
	
	
	
}
