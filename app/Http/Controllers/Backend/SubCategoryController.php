<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use DB;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $subcategory = SubCategory::with('category')->get();

        return view('Backend.subcat.index', compact('category', 'subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Backend.subcat.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',

        ]);
        $subcat = new Subcategory();
        $subcat->subcategory_name = $request->subcategory_name;
        $subcat->category_id = $request->category_id;
        $subcat->save();
    

        return redirect(route('subcategory.index'))->with('message', 'ُزیر مجموعه با موفقیت ثبت شد');
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
        $subcategory = DB::table('sub_categories')->where('id',$id)->first();

        $category = DB::table('categories')->get();
        return view('Backend.subcat.edit',compact('subcategory','category'));
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
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('sub_categories')->where('id',$id)->update($data);
    
               return Redirect()->route('subcategory.index')->with('message', 'ُزیر مجموعه با موفقیت ویرایش شد'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sub_categories')->where('id',$id)->delete();

           return Redirect()->back()->with('message', 'ُزیر مجموعه با موفقیت حذف شد');
    }
}
