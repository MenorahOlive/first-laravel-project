<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
public function root(){
    return view('welcome');
}
public function test(){
    return view('test');
}
public function about(){
    return view('about');
}

}
