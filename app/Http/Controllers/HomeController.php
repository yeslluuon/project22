<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Bundit Nunates",
            "age" => 28,
            "status" => "single"
        ];
        return view('home', $data);
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view('contact');
    }

    public function playground()
    {
        return Category::all();
        // $category = new Category();
        // $category->category_name = "ข่าวอาชญากรรม";
        // $category->save();
        // return $category;
    }
}
