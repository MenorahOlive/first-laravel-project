<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function timetable(){
        return 'this is the students timetable page';
    }
    public function units(){
        return 'this is the students units page';
    }
}
