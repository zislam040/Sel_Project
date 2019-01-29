<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\designation;
use App\department;


class ProjectController extends Controller
{
    public function index(){
        return view ('welcome');
    }



    public function registration(){
        return view ('registration');
    }



    public function userreport(){
        $designation= designation::paginate(4);
        return view ('userreport')->with('designation',$designation);
    }



      public function department(){
        $department= department::paginate(4);
        return view ('department')->with('department',$department);
    }
}
