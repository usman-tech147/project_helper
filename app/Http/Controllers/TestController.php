<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    protected function get_data()
    {
//        $list = array(0=>'prog 0', 1=>'prog 1', 2=>'prog 2',3 =>'prog 3');
        $list = ['prog 0'=>'prog 0', 'prog 1'=>'prog 1', 'prog 2'=>'prog 2','prog 3' =>'prog 3'];
        return view('test',compact('list'));
    }

    protected function post_data(Request $request)
    {
        dd($request->all());
    }
}
