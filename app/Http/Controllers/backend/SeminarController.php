<?php

namespace App\Http\Controllers\backend;

use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminars = Seminar::with('leads')->select('id', 'topic')->get();
        //dd($seminars);
        return view('backend.seminar.allseminar' , compact('seminars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.seminar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request);
       $request->validate([
           // validation process goes from here
          'topic' => 'required|unique:seminars,topic',
           //'date' => 'required|after_or_equal:date', or
           //'date' => 'required|after_or_equal:now', or
           'date' => 'required|after_or_equal:today',
           'time' => 'required|',
       ]);
            //echo  Carbon::parse($request->date)->format('d, m y') ;
            $date = Carbon::parse($request->date)->format('d M Y, l') ;
            $time = Carbon::parse($request->time)->format('h:i A') ;
  
         // data inser process goes from here
            $seminar = new Seminar();
            //dd($seminar);
            $seminar->topic = $request->topic;
            $seminar->date =  $date ;
            $seminar->time =  $time;
            $seminar->save();

            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //

    }
    // joining part goes here
    public function joinseminar(){
        //echo "this is joining page";
         // fatch data from database
        $seminars = Seminar::select('id', 'topic')->where('status', 0)->get();
        //dd($seminars);
        return view('backend.seminar.register', compact('seminars'));
    }
}
