<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\csd_project;
class dataController extends Controller
{
    //data function
    public function csd_data(){
        $results = DB::select("SELECT * FROM 2022_application_development_and_support_exam_data order by Project_Ref ASC limit 0,10");
           $array = json_decode(json_encode($results), true);
           //return response()->json($results);           
           return view('welcome',['data'=>$array]);      
          // return view('welcome', ['name' => 'Victoria']);
          echo '<pre>',print_r($array),'</pre>'; 
        }

}
