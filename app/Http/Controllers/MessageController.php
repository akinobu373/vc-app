<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function hello(){
        return view('message.hello');
    }

    public function var(){
        return view('message.var',['variable' => 'Hello from MessageController']);
    }

    public function word($meg){
        return view('message.word',['msg'=>$meg]);
}
    
    public function word2 ($name,$msg){
        return view('message.word2',['msg'=>$msg,'name' => $name]);
}
    
}