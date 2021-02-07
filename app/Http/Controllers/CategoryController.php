<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'categories' => Category::paginate(5),
        ];
        return view("category.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $category_name = $_POST['category_name'];
        $rules = [
            'category_name' => "required|min:3"
        ];
        $massages = [
            'category_name.required' => "คุณจำเป็นต้องกรอกข้อมูลในช่องชื่อหมวดหมู",
            'category_name.min' => "คุณจำเป็นต้องกรอกข้อมูลในช่องชื่อหมวดหมูอย่างน้อย :min ตัวอักษร"
        ];
        $this->validate($request, $rules, $massages);

        $category_name = $request->input("category_name");
        $category = new Category();
        $category->category_name = $category_name;
        $category->save();
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'category' => Category::find($id),
        ];
        return view('category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'category_name' => "required|min:3"
        ];
        $massages = [
            'category_name.required' => "คุณจำเป็นต้องกรอกข้อมูลในช่องชื่อหมวดหมู",
            'category_name.min' => "คุณจำเป็นต้องกรอกข้อมูลในช่องชื่อหมวดหมูอย่างน้อย :min ตัวอักษร"
        ];
        $this->validate($request, $rules, $massages);

        $category_name = $request->input("category_name");
        $category =  Category::find($id);
        $category->category_name = $category_name;
        $category->save();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/category');
    }
}
