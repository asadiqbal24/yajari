<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserChatController extends Controller
{
    public function user_chat()
    {
        return view('frontend.Chat');
    }
}
