<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublishRequest;

class RequestController extends Controller
{
    public function confirm_publish_save(Request $request)
    {
     //   dd($request);

        $request->validate([
            'request_title' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'price' => 'required',
            'position' => 'required',
            'description' => 'required',
            'urgent' => 'required',
            'professional' => 'required',
            'phone_number' => 'required',
            
            ]);
         if ($request->hasFile('file')) 
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('file')->getClientOriginalExtension();
                     $filename_original = $request->file('file')->getClientOriginalName();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('file')->move($destinationPath,$filename_original))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $thumbnail = asset("/images/images/")."/".$filename_original;
                    

                }

            $new= new PublishRequest();
            $new->request_title=$request->request_title;
            $new->category=$request->category;
            $new->sub_category=$request->sub_category;
            $new->price=$request->price;
            $new->position=$request->position;
            $new->description=$request->description;
            $new->urgent=$request->urgent;
            $new->professional=$request->professional;
            $new->phone_number=$request->phone_number;
            $new->file=$thumbnail;
            $new->save();
            alert()->success("Data inserted Successfully ");
            return redirect()->route('confirm-publish');


    }


    public function confirm_publish()
    {
        return view('frontend.ConformPublish');
    }

    public function validating_request()
    {
     
        return view('frontend.validatingRequest1');
    }

    public function view_request()
    {
      return view('frontend.ViewRequest');  
    }
}