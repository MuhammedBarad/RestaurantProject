<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Meals;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Pagination\Paginator;

class mealController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $meals = Meals::paginate(6);
        return view('Meal.show', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('Meal.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'category' => 'required|min:3|max:15',
            'name' => 'required|min:3|max:15',
            'description' => 'required|min:3|max:100',
            'price' => 'required|numeric',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(100, 100)->save('upload/Meals/' . $name_gen);
        $save_url = 'upload/Meals/' . $name_gen;
        Meals::create([
            'category' => $request->category,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $save_url
        ]);

        $message = 'Meal Created successfuly';
        return redirect('Meal')->with('success', $message);
    }


    public function show()
    {
    }

    public function edit($id)
    {
        $meal = Meals::findOrFail($id);
        $categories = Categories::all();
        return view('Meal.edit', compact('meal','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cat = Meals::findOrFail($id);
        $old_img = $request->old_img;

        if ($request->file('image')){

            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(100, 100)->save('upload/Meals/' . $name_gen);
            $save_url = 'upload/Meals/' . $name_gen;
            $cat->Update([
                'category' => $request->category,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $save_url
            ]);

        }else{
            $cat->Update([
                'category' => $request->category,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);
        }
        $message = 'Meals Updated successfuly';
        return redirect('Meal')->with('success', 'Meal Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cat = Meals::findOrFail($id);
        $cat->delete();
        $message = 'Melas Deleted successfuly';
        return redirect('Meal')->with('success', $message);
    }
}
