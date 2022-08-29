<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\projects;
class ProjectController extends Controller
{
    public function index()
    {
        return projects::all();
    }
    public function show($Project_Ref)
    {
        return projects::find($Project_Ref);
    }
    public function show_country($Country) 
    {
        return response()->json(projects::where('Project_Ref', 'like', '%' . 'TON-RS-002' . '%'));
    }

    public function show_status($Status)
    {
        return projects::find($Status);
    }
}