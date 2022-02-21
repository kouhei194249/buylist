<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


class ThingController extends Controller
{
    public function index(Category $category)
    {
        return view('thing/index')->with(['categories' => $category->getPaginateByLimit()]);
    }
    
    public function list()
    {
        return view('thing/list') ; 
    }
     
    public function show()
    {
        return view('thing/show') ; 
    }
     
    public function create()
    {
        return view('thing/create') ; 
    }
     
    public function possession()
    {
        return view('thing/possession') ; 
    }
    
     
}
