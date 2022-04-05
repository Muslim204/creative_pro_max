<?php

namespace App\Http\Controllers\frontend;

use App\Models\Bannar;
use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FronntendController extends Controller
{
  public function home(){
      //$allbannar = Bannar::where('status',0)->orderBy('created_at', 'DESC')->get();  OR
      //dd( $allbannar );
      $allbannars = Bannar::where('status',0)->latest()->get(); 
      //dd(  $allbannar );
      $allseminars = Seminar::where('status' , 0)->latest()->get();
      //dd($seminar);

      return view('frontend.index' ,compact('allbannars' ,'allseminars'));
  }
}
