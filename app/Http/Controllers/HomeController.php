<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Meals;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cats = Categories::all();
        if(Auth()->user()->is_admin == 1){
            $users = User::paginate(13);
            return view('User.index',compact('users'));
        }
        else{
            if(!$request->category){

                $meals = Meals::paginate(12);
                return view('UserPage',compact('cats','meals'));
            }else{
                $meals = Meals::where('category',$request->category)->paginate('6');
                return view('UserPage',compact('cats','meals'));
            }
        }

    }
}
