<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//models
use App\User;
use App\profiles;
use App\pictures;
use App\locations;
use App\social;
use App\testimony;

//storage library
use Illuminate\Support\Facades\Storage;

//intervention image
use Image;

//for ajax error returns
use Validator;
use Response;
use View;
use Illuminate\Support\Facades\Input;

//mapper
use Mapper;

class pagescontroller extends Controller
{
    //................................visitors........................
    //index page method
    public function index(){
        
     $users=User::orderby('id','desc')->where('fname','!=',Null)
     ->where('lname','!=',Null)->select('fname','lname','id')->take(4)->get();
     
     $gal =pictures::all()->take(6);

     //testimonies
     $tes =testimony::orderby('id','desc')->where('id','!=',Null)->select('name','testimony','created_at')
     ->take(3)->get();
        return view('index')->with('gal',$gal)->with('users',$users)->with('tes',$tes);
    }//meth end


  

    //services page method
    public function services($service){
//load session
        session(['serv' => $service]);

$gal =pictures::all()->take(6);

        return view('services')->with('service',$service)->with('gal',$gal);
    }//meth end


     //view profile page method
     public function info($id){

        //get user
       $profile =user::findorfail($id);

       //get general info
       $infoID =profiles::where('user_id','=',$id)->pluck('id')->first();
       $info =profiles::findorfail($infoID);

       //location id based on userid in user_id
     $locationID=locations::where('user_id','=',$id)->pluck('id')->first();
        $location=locations::findorfail($locationID);

        $works=pictures::where('user_id','=',$id)->paginate(9);

         //mapper
  Mapper::map($location->lat, $location->lng, 
  ['zoom' => 13, 
  //'locate' =>'true',
  'markers' => ['title' => $profile->fname.'"s Location', 'animation' => 'DROP'],
  //'draggable' => true, 'eventDragEnd' => 'document.getElementById("lat").value = event.latLng.lat(),document.getElementById("lng").value = event.latLng.lng();',
  ]);
        //views counter increment
        if(Auth()->check()){
            //check if auth user profile else count
          if(Auth()->user()->id == $profile->id){
              //no count
          }else{
              //auth bt nt my profile, so count
              $profile->increment('views');
          }

        }else{
            $profile->increment('views');
        }

        $mainID = social::where('user_id','=',$id)->pluck('id')->first();
          $soc=social::find($mainID);
        
        return view('profile_view')->with('profile',$profile)->with('info',$info)
        ->with('location',$location)->with('works',$works)->with('soc', $soc);
    }//meth end




    //rules
protected $rules4 =
[
    'Name'=> 'required|string|max:30',
        'Email'=> 'required|string|email|max:255',
        'Message'=> 'required|string|max:255',
    
];
    public function contact(Request $request){
        $validator = Validator::make(Input::all(), $this->rules4);
        //if val error
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
    
        //send mail to us
        $subject =$request->input('Name');
          $body=$request->input('Message');
       $sender = $request->input('Email');

        }//if end
    }//meth end


        //rules
protected $rules5 =
[
    'Name'=> 'required|string|max:30',
        'Testimony'=> 'required|string|max:255',
    
];

      //testimony
      public function Testimony(Request $request){

        $validator = Validator::make(Input::all(), $this->rules5);
        //if val error
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {

            $tt = new testimony;

            $tt->name=$request->input('Name');
            $tt->testimony=$request->input('Testimony');
            $tt->save();

        return response()->Json('Testified!');
        }
    }


 //service initial load
 public function service_con(){
     //get serv from session
     $service = session('serv');

     //if filter else normal load
     
    $result = profiles::orderby('id','desc')->where('category','=',$service)
    ->select('id','user_id','title','address','state','town')->paginate(7)
    ->appends(request()->all());;
//->appends('School', request('School'));

     return view('ajax.ajax-service-content')->with('result',$result);
 }



 //filter category/ service result more
   
 public function filter(Request $request){
    

     $state = $request->input('State');
      $loc = $request->input('Location');
       
    $ser = $request->input('service');

    if($state && $loc){
        $result = profiles::orderby('id','desc')->where('category','=',$ser)->where('state','=',$state)
        ->where('town','LIKE','%'.$loc.'%')
        ->select('id','user_id','title','address','state','town')->paginate(7)
        ->appends(request()->all());
    }else{
        $result = profiles::orderby('id','desc')->where('category','=',$ser)->where('state','=',$state)
        ->select('id','user_id','title','address','state','town')->paginate(7)
        ->appends(request()->all());
    }
   
//->appends('School', request('School'));

     return view('service-search')->with('result',$result)->with('ser',$ser);
  
 }


 public function homefilter(Request $request){
    $state = $request->input('State');
    $ser = $request->input('Service');

   $result=profiles::orderby('id','desc')->where('category','=',$ser)->where('state','=',$state)
   ->select('id','user_id','title','address','state','town')->paginate(7)
   ->appends(request()->all());
     
    return view('ajax.ajax-home-filter')->with('result',$result);
 }


 //search job
 public function wordsearch(Request $request){
    $word = $request->input('Word');

   $result= profiles::orderby('id','desc')->select('id','user_id','title','address','state','town')
    ->where('title','LIKE','%'.$word.'%')->orwhere('address','LIKE','%'.$word.'%')
    ->orwhere('town','LIKE','%'.$word.'%')->orwhere('state','LIKE','%'.$word.'%')->paginate(7)
    ->appends('Word', request('Word'));

    return view('ajax.ajax-home-result')->with('result',$result);
 }


  //terms of use
  public function terms(){
    return view('terms');
  }
//................................visitors........................










//................................users........................

 //dashboard page method
 public function dash(){

    //gallery count
    $id = Auth()->user()->id;
  $gal = pictures::where('user_id','=',$id)->select('id')->count();
  //profile views
  $views = user::findorfail($id);
  $view = $views->views;

  //mapper
  Mapper::map(6.519092233615251, 3.3994188271362873, 
  ['zoom' => 13, 
  'locate' =>'true',
  'markers' => ['title' => 'Me', 'animation' => 'DROP'],
  'draggable' => true, 'eventDragEnd' => 'document.getElementById("lat").value = event.latLng.lat(),document.getElementById("lng").value = event.latLng.lng();',
  ]);

   //gallery
   $gallery = pictures::orderby('id','desc')->where('user_id','=', $id)->select('image')->take(7)->get();

    return view('users.dashboard')->with('gal',$gal)->with('view',$view)->with('gallery',$gallery);
}//meth end


 //profile page method
 public function profile(){
    
    $id = Auth()->user()->id;

    $profileID = profiles::where('user_id','=',$id)->pluck('id')->first();

      $info=profiles::find($profileID);

      $title = $info->title;
      $cat =$info->category;
      $state =$info->state;
      $town =$info->town;
      $add =$info->address;
      $loc =$info->location;
      $job =$info->job;

      //social details
      $mainID = social::where('user_id','=',$id)->pluck('id')->first();
      $soc=social::find($mainID);

    return view('users.profile')->with('title',$title)->with('cat',$cat)
    ->with('state',$state)->with('town',$town)->with('add',$add)->with('loc',$loc)->with('job',$job)
    ->with('soc',$soc);
}//meth end



 //gallery page method
 public function gallery(){
      //gallery
      $id = Auth()->user()->id;
   $gallery = pictures::orderby('id','desc')->where('user_id','=', $id)->select('image')->paginate(10);

    return view('users.gallery')->with('gallery',$gallery);
}//meth end


//rules
protected $rules1 =
[
    'First_Name'=> 'string|max:30|nullable',
        'Last_Name'=> 'string|max:30|nullable',
        'Phone'=> 'numeric|min:11|nullable',
        'Gender'=> 'string|nullable',
        'Age'=> 'numeric|nullable',
         'Profile_Image' => 'image|max:15999|nullable',
        'Hrs' => 'string|max:30|nullable',
        'Service' => 'string|max:30|nullable',
];

//updat general info
public function general(Request $request){

    $validator = Validator::make(Input::all(), $this->rules1);
    //if val error
    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {

        $id = Auth()->user()->id;
       $update = User::find($id);

       $update->fname = $request->input('First_Name');
       $update->lname = $request->input('Last_Name');
       $update->phone = $request->input('Phone');
       $update->sex = $request->input('Gender');
       $update->age = $request->input('Age');

        //image
         if($request->hasfile('Profile_Image')){
        //get filename with extension
        $filenamewithextension = $request->file('Profile_Image')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('Profile_Image')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;

        //#original
            //Upload File
           // $request->file('Profile_Image')->storeAs('public/post_images_original', $filenametostore);
            //#resized
            $request->file('Profile_Image')->storeAs('public/profile_images', $filenametostore);
    
            // #resized
            //Resize image here
            $thumbnailpath = public_path('/storage/profile_images/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(90, 90, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);

       // return redirect('images')->with('success', "Image uploaded successfully.");
      // return response()->Json('success!');
    }else{
        $filenametostore = 'noimage.png';
    }

        $update->image= $filenametostore;
       $update->hrs = $request->input('Hrs');
       $update->service = $request->input('Service');

       $update->save();

    return Response()->json('General Profile Updated!');

    }

}//meth end




//rules
protected $rules2 =
[
    'Title'=> 'string|max:100|nullable',
        'Category'=> 'string|max:30|nullable',
        'State'=> 'string|max:30|nullable',
        'Town'=> 'string|max:255|nullable',
        'Address'=> 'string|max:255|nullable',
         'Summary' => 'string|max:255|nullable',
        'Job_Summary' => 'string|max:255|nullable',
];

//biz profile update
public function biz(Request $request){

    $validator = Validator::make(Input::all(), $this->rules2);
    //if val error
    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {

        $id = Auth()->user()->id;

      $profileID = profiles::where('user_id','=',$id)->pluck('id')->first();

        $info=profiles::find($profileID);
       $info->title = $request->input('Title');
       $info->category = $request->input('Category');
       $info->state = $request->input('State');
       $info->town = $request->input('Town');
       $info->address = $request->input('Address');
       $info->location = $request->input('Summary');
       $info->job = $request->input('Job_Summary');

       $info->save();
       return Response()->json('Business Profile Updated!');
    }

}//meth end


 //dashboard page method
 public function mark(Request $request){
    $id = Auth()->user()->id;

    $lat =$request->input('lat');
    $lng = $request->input('lng');

     $realID = locations::where('user_id','=',$id)->pluck('id')->first();

    $cord=locations::find($realID);
    //update
    $cord->lat= $lat;
    $cord->lng= $lng;

    $cord->save();

    return response()->json('Location Updated!');

 }//meth end



 //rules
protected $rules3 =
[
    'Title'=> 'required|string|max:50',
        'Picture'=> 'required|image|max:15999',
        
];

 public function pix(Request $request){

    $validator = Validator::make(Input::all(), $this->rules3);
    //if val error
    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {
        //id
    $id = Auth()->user()->id;
    $title =$request->input('Title');

//image
if($request->hasfile('Picture')){
    //get filename with extension
    $filenamewithextension = $request->file('Picture')->getClientOriginalName();

    //get filename without extension
    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

    //get file extension
    $extension = $request->file('Picture')->getClientOriginalExtension();

    //filename to store
    $filenametostore = $filename.'_'.time().'.'.$extension;

    //#original
        //Upload File
       // $request->file('Picture')->storeAs('public/post_images_original', $filenametostore);
        //#resized
        $request->file('Picture')->storeAs('public/user_images', $filenametostore);

        // #resized
        //Resize image here
        $thumbnailpath = public_path('/storage/user_images/'.$filenametostore);
        $img = Image::make($thumbnailpath)->resize(500, 500, function($constraint) {
        $constraint->aspectRatio();
    });
    $img->save($thumbnailpath);

   // return redirect('images')->with('success', "Image uploaded successfully.");
  // return response()->Json('success!');
}else{
    $filenametostore = 'noimage.jpg';
}

//save

$new = new pictures;
$new->user_id=$id;
$new->title=$title;
$new->image=$filenametostore;

$new->save();

    return response()->json('Picture Uploaded!');

}//if end

 }//meth end


//reload gal counter
 public function reload_count(){
        //gallery count
    $id = Auth()->user()->id;
    $gal = pictures::where('user_id','=',$id)->select('id')->count();
    return response()->json($gal);
 }



  //rules
protected $rulesx =
[
    'Facebook'=> 'string|max:70|nullable',
        'Twitter'=> 'string|max:70|nullable',
        'Website'=> 'string|max:70|nullable', 
];

public function social(Request $request){
    $validator = Validator::make(Input::all(), $this->rulesx);
    //if val error
    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {

        $id = Auth()->user()->id;
        $mainID = social::where('user_id','=',$id)->pluck('id')->first();
          $soc=social::find($mainID);
        $soc->fb = $request->input('Facebook');
        $soc->tw = $request->input('Twitter');
        $soc->web = $request->input('Website');

        $soc->save();

    return response()->json('Social Links Updated!');

    }
}
 
//alert to update profile
public function tasks(){
    //put reports in session
    $id = Auth()->user()->id;
    $user =User::findorfail($id);

    if($user->fname == NULL){
        $fname='Provide your First Name';
    }else{
        $fname='';
    }
    if($user->lname == NULL){
       $lname='Provide your Last Name';
    }else{
        $lname='';
    }
    if($user->phone == NULL){
        $phone ='Add your Phone Number';
    }else{
        $phone='';
    }
    if($user->sex == NULL){
        $sex = 'Choose Sex';
    }else{
        $sex='';
    }
    if($user->age == NULL){
        $age = 'Insert Your Age';
    }else{
        $age='';
    }

    return view('users.tasks')->with('fname',$fname)->with('lname',$lname)->with('phone',$phone)
    ->with('sex',$sex)->with('age',$age);
}



//................................users........................

}//class end
