<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StudentController extends Controller
{
    //
    

    public function index(){
        return DB::connection('mysql')->table('crud')->get();
        // return DB::connection('mysql2')->table('crud1')->get();
       
        
        
    }
    
}
