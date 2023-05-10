<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Categories::paginate(13);
        return view('Category.show',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat_name'=>'required|min:3|max:15'
        ]);

        Categories::create([
            'cat_name'=>$request->cat_name
        ]);
        $message = 'Category Created successfuly';
        return redirect('Category')->with('success',$message);
    }


    public function show(){

    }

    public function edit($id)
    {
        $cat = Categories::findOrFail($id);
        return view('Category.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $cat = Categories::findOrFail($id);
        $request->validate([
            'cat_name'=>'required|min:3|max:15'
        ]);
        $cat->Update([
            'cat_name'=>$request->cat_name
        ]);
        $message = 'Category Updated successfuly';
        return redirect('Category')->with('info',$message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cat = Categories::findOrFail($id);
        $cat->delete();

        $message = 'Category Deleted successfuly';
        return redirect('Category')->with('success',$message);
    }
}
