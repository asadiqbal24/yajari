<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Category;
use App\Models\PublishRequest;

class PublishRequestController extends Controller
{
    public function publish_request_list()
    {
        $publishrequest=PublishRequest::where('confirm_status',1)->with('category_rel')->get();
        return view('admin.publish_request_list',compact('publishrequest'));
    }


    public function publishrequest()
    {
        $category=Category::get();
        return view('frontend.PublishRequest',compact('category'));
    }

    public function admin_request_approve($id)
    {
    
        $approve=PublishRequest::where('id',$id)->where('confirm_status',1)->first();

        if (!empty($approve)) {
           $approve->status=1;
           $approve->save();
        }
        toast('Publish Request Is Approved','success');
        return redirect()->back();
    }

    public function admin_request_disapprove($id)
    {
       $disapprove=PublishRequest::where('id',$id)->where('confirm_status',1)->first();
        if (!empty($disapprove)) {
           $disapprove->status=-1;
           $disapprove->save();
        }
        toast('Publish Request Is DisApproved','success');
        return redirect()->back();  
    }
    public function admin_publish_request_delete($id)
    {
        $delete=PublishRequest::where('id',$id)->where('confirm_status',1)->delete();
        toast('Publish Request Is Deleted Successfully','success');
        return redirect()->back();
    }
}
