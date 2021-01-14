<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAccesses;
class TestController extends Controller
{
    //
    public function Show($AccessLevel){
        $data = UserAccesses::where('AccessLevel',$AccessLevel)->firstorfail();

        //dd($data[0]->Description);
        return view('test',['data'=>$data]);
    }
}
