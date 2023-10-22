<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function classes(){
        return 'This is the lecturer classes page';
    }

    public function units(){
        return 'This is the lecturer units page';
    }

    public function timetable(){
        return 'This is the lecturer timetable page';
    }
}
