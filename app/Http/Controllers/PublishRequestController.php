<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Category;

class PublishRequestController extends Controller
{
    public function publish_request_list()
    {
        dd('test');
    }


    public function publishrequest()
    {
        $category=Category::get();
        return view('frontend.PublishRequest',compact('category'));
    }
}
