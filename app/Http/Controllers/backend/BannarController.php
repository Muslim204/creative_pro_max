<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bannar;
use Illuminate\Support\Facades\File;

class BannarController extends Controller
{
    
    
    // ********************************************ALL BANNAR PART GOES HERE******************
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bannars = Bannar::orderBy('created_at', 'DESC')->get();
        $bannars = Bannar::orderBy('created_at', 'DESC')->paginate(3);
        //dd( $bannar);
        return view('backend.bannar.all_bannar', compact('bannars'));
    }
    // ********************************************ALL BANNAR PART ENDS HERE******************


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.bannar.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return $request->bannar_name;
        //return $request->bannar_image;
      // validaton process goes
        $request->validate([
            'bannar_name'=>'required|max:30',
            'bannar_image'=>'required|max:5020|mimes:png,jpg,svg,jpeg',

        ]);
         // validaton process ends

            $bannar_image= $request->bannar_image;
            //$extension =  $bannar_image->extension();
            //echo $extension;
             $extension =  $bannar_image->getClientOriginalExtension();
            //echo $extension;
            $bannar_image_new_name = 'bannar_'.uniqid(). '.'. $extension;
           //echo  $bannar_image_new_name;
            //echo public_path();
            $path=  public_path('/storage/image/');
            //echo $path ;
            /*if(File::exists( $path)){
                echo "acy";
            }
            else{
                echo "na";
            }*/
            if(!File::exists( $path)){
                mkdir($path);
            }
            $bannar_image->move( $path,   $bannar_image_new_name );

            $bannar = new Bannar();
            $bannar->bannar_name = $request->bannar_name;
            $bannar->bannar_image =   $bannar_image_new_name ;

            $bannar->save();
            return back();


       // image processing work ends from here

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
     * // ////////////////////////////////////////////////////EDIT PARTS GOES FROM HERE//////////////
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo $id;
        //$update = Bannar::find($id); or
        //$update = Bannar::select('id','bannar_name', 'bannar_image')->get(); or
        //$update = Bannar::where('id', $id)->select('id','bannar_name', 'bannar_image')->get(); or
        //$update = Bannar::where('id', $id)->select('id','bannar_name', 'bannar_image')->first(); 
       // $bannar_name = $update->bannar_name;
        //$bannar_image = $update->bannar_image;
        //$bannar_id= $update->id;
        //dd($bannar_id);
        //dd($update->bannar_name);
        //dd($update->bannar_image);

        // shortcut process 

        $oldbannar_data = Bannar::find($id , ['id', 'bannar_name', 'bannar_image']);
        //dd($oldbannar_data);
       
        return view('backend.bannar.edit' , compact('oldbannar_data'));
    }
     /* // ////////////////////////////////////////////////////EDIT PARTS ENDS FROM HERE//////////////*


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //echo " hellow update";
                 // valadition process goes here
             $request->validate([
                //'bannar_name' => 'required|max:30',
                //'bannar_image'=> 'required|max:5020|image',
                //|dimensions:max_width=100,max_height=100'
        ]);
       
            if($request->bannar_image){
       
         // update image processing goes here
         $extension = $request->bannar_image->getClientOriginalExtension();
         //dd($extension);
         $image_newName = 'Bannar_'. uniqid(). '.' .  $extension;
         $save_path = public_path(). '/storage/image/';
         //dd( $save_path );
         if(!File::exists($save_path)){
             mkdir($save_path);
         }
         $request->bannar_image->move($save_path,    $image_newName );

         // unlink image processing
         $bannar = Bannar::find($id , ['bannar_image']);
         //echo $bannar ;
         $old_image_path = public_path(). '/storage/image/'.$bannar->bannar_image;
         //dd($old_image_path);
         if(File::exists($old_image_path)){
             unlink($old_image_path);
              // data insert 
         $bannar =Bannar::find($id);
         //echo $bannar;
         $bannar->bannar_name = $request->bannar_name;
         $bannar->bannar_image = $image_newName;
         //echo $bannar->bannar_name;
         //echo $bannar->bannar_image=  $image_newName;
         $bannar->save();
         return back();
         }

        
}        else{
                $bannar = Bannar::find($id);
                $bannar->bannar_name= $request->bannar_name;
                $bannar->save();
                return back();
            }

          
        
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        //echo "hello delete";
        //return view('backend.bannar.delete_bannar');
        $bannar =Bannar::find($id);
        /*$old_image_path = public_path().'/storage/image/'.$bannar->bannar_image;
        //dd($old_image_path);
        if(File::exists($old_image_path)){
            unlink($old_image_path);
        }*/
        $bannar->delete();
        return back();

    }

    // active or deactive status data 

    public function status($id){
            //
    }

    public function trashbannar(){
        //$bannar = Bannar::withTrashed()->get();
        $bannars = Bannar::onlyTrashed()->get();
        //dd($bannar);
       
       return view('backend.bannar.alltrash_bannars', compact('bannars'));
    }
    public function restorebannar($id){
        $bannar = Bannar::onlyTrashed()->find($id);
        //dd($bannar);
        $bannar->restore();
        return back();
    }
    public function bannar_parmanent_delete($id){
         $bannar =Bannar::onlyTrashed()->find($id);
         //dd($bannar);
        $old_image_path = public_path().'/storage/image/'.$bannar->bannar_image;
        //dd($old_image_path);
        if(File::exists($old_image_path)){
            unlink($old_image_path);
        }
        $bannar->forceDelete();
        return back();
    }
}
