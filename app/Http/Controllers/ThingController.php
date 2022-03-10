<?php

namespace App\Http\Controllers;

use App\Category;
use App\Thing;
use App\Saving;
use Illuminate\Http\Request;
use App\Http\Requests\ThingRequest;
use App\Http\Requests\SavingRequest;
use Illuminate\Support\Facades\Auth;



class ThingController extends Controller
{
    public function index(Category $category)
    {
        return view('things/index')->with(['categories' => $category->getPaginateByLimit()]);
    }
    public function list(Category $category, Thing $thing, Saving $saving)
    {
        return view('things/list')->with(['things' => $thing->getPaginateByLimit($category->id),'category_title' => $category->category, 'possession' => $saving->where('user_id',1)->first()->possession]) ; 
    }
    public function show(Thing $thing,Category $category)
    {
        return view('things/show')->with(['thing' => $thing,'category' => $category->where('id',$thing->category_id)->first()->category]) ; 
    }
    public function create(Category $category)
    {
        return view('things/create')->with(['categories' => $category->get()]) ; 
    }
    public function possession()
    {
        return view('things/possession') ; 
    }
    public function store1(Request $request, Thing $thing) //引数をRequest->ThingRequestにする
    {
        $input = $request['thing'];
        $input += ['user_id' => 1];
        $thing->fill($input)->save();
        return redirect('/things/' . $thing->id);
    } 
    public function edit(Thing $thing, Category $category)
    {
        return view('things/edit')->with(['thing' => $thing,'categories'=>$category->get(),'numbers'=>[1,2,3,4,5]]);
    }
    public function update(Request $request, Thing $thing)
    {
        $input_thing = $request['thing'];
        $thing->fill($input_thing)->save();
        return redirect('/things/' . $thing->id);
    }
    public function delete(Thing $thing)
    {
        $thing->delete();
        return redirect('/');
    }
    public function p_create()
    {
        return view('/things/p_create'); 
    }
    public function store2(Request $request, Saving $saving) //引数をRequest->SavingRequestにする
    {
        $input = $request['saving'];
        $input += ['user_id' => 1];
        $saving->fill($input)->save();
        return redirect('/');
    } 
    
    public function p_edit(Saving $saving)
    {
        return view('/things/p_edit')->with(['saving'=>$saving->where('user_id',Auth::id())->first()]); 
    }
}
