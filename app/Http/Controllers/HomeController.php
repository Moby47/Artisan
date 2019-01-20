<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pictures;
use App\User;
use Mapper;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //gallery count
    $id = Auth()->user()->id;
    $gal = pictures::where('user_id','=',$id)->select('id')->count();
    //profile views
    $views = user::findorfail($id);
    $view = $views->views;
  
    Mapper::map(6.519092233615251, 3.3994188271362873, 
    ['zoom' => 13, 
    'locate' =>'true',
    'markers' => ['title' => 'Me', 'animation' => 'DROP'],
    'draggable' => true, 'eventDragEnd' => 'document.getElementById("lat").value = event.latLng.lat(),document.getElementById("lng").value = event.latLng.lng();',
    ]);

     //gallery
   $gallery = pictures::orderby('id','desc')->where('user_id','=', $id)->select('image')->take(7)->get();

        return view('users.dashboard')->with('gal',$gal)->with('view',$view)->with('gallery',$gallery);
    }
}
