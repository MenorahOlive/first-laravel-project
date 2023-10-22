<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Models\computer_records;

class ComputerController extends Controller
{
    public function show_computers(){
       // $computers= computer_records ::all();
        $computers= DB::table ('computer_records')->where ('RAM_Size','8GB')->get();

        return view('computers', ['computers'=>$computers]);
    }
}
