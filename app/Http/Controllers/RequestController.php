<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublishRequest;
use Auth;

class RequestController extends Controller
{
    public function confirm_publish_save(Request $request)
    {
     //   dd($request);
          
        // $request->validate([
        //     'request_title' => 'required',
        //     'category' => 'required',
        //     'sub_category' => 'required',
        //     'price' => 'required',
        //     'position' => 'required',
        //     'description' => 'required',
        //     'file'=>'required',
        //     ]);


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

        if(Auth::user()){
         
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
            $new->auth_id=Auth::user()->id;
            $new->save();
            alert()->success("Data inserted Successfully ");
            return redirect()->route('confirm-publish',['id'=>$new->id]);
        }else{
            toast('Please Login For Publish Request','info');
            return redirect()->back();
        }

    }


    public function confirm_publish($id)
    {
        $request=PublishRequest::where('id',$id)->with('user')->first();
        //dd($request);
        return view('frontend.ConformPublish',compact('request'));
    }


    public function user_confirm_published_save(Request $request)
    {
       $confirm_publish=PublishRequest::where('id',$request->id)->first();
       if(!empty($confirm_publish)){
        $confirm_publish->confirm_status=1;
        $confirm_publish->save();
       }
       toast('Your Request Is Published Successfully','success');
       return redirect()->route('validating-request');
    }

    public function validating_request()
    {
     
        return view('frontend.validatingRequest1');
    }

    public function view_request()
    {
      return view('frontend.ViewRequest');  
    }

    public function my_request()
    {
        $myrequest=PublishRequest::where('auth_id',Auth::user()->id)->with('user','category_rel')->get();
        //dd($myrequest);
     return view('frontend.MyRequests',compact('myrequest'));   
    }

    public function myfavourites_neighbor()
    {
     return view('frontend.MyFavouritesNeighbors');     
    }

    public function my_favourite_request()
    {
     return view('frontend.MyFavoritesRequests');  
    }

    public function chat()
    {
     return view('frontend.Chat');   
    }
    public function mobile_chat_message()
    {
     return view('frontend.MobileChatMessages');  
    }
    public function mobile_chat_profile()
    {
        return view('frontend.MobileChatProfile');
    }

    public function pink_leave_review()
    {
     return view('frontend.PinkLeaveReview');   
    }

    public function modify_personal_info()
    {
        return view('frontend.ModifyPersonalinfo');
    }
    public function change_password()
    {
        return view('frontend.ChangePassword');
    }

    public function modify_categories()
    {
     return view('frontend.ModifyCategories');   
      
    }
    public function modify_categories_edit()
    {
        return view('frontend.ModifyCategoryEdit');
    }
    public function modify_distance()
    {
        return view('frontend.ModifyDistance');
    }

    public function change_language()
    {
        return view('frontend.ChangePassword');
    }

    public function view_detail($id)
    {
     $detail=PublishRequest::where('id',$id)->with('user')->first();
     //dd($detail);   
     return view('frontend.viewdetails',compact('detail'));   
    }

    public function requests()
    {
        $request=PublishRequest::where('status',1)->with('user','category_rel')->orderBy('id','DESC')->get();


       return view('frontend.RequestsPage',compact('request'));
    }
}
