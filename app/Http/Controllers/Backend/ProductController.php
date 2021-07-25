<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $category_id = null)
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', 'categories.id')
            ->select('products.*', 'categories.name')
            ->get();

        return view('Backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        
        return view('Backend.product.create', compact('category'));
    }

    public function GetSubcat($category_id)
    {
        $cat = SubCategory::where('category_id', $category_id)->get();
        return json_encode($cat);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request, []);

        $product = new Product();
        $product->product_title = $request->product_title;
        $product->product_details = $request->product_details;
        $product->product_summary = $request->product_summary;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->product_writer = $request->product_writer;
        $product->product_translator = $request->product_translator;
        $product->product_publisher = $request->product_publisher;
        $product->selling_price = $request->selling_price;
        $product->product_level = $request->product_level;
        $product->product_kind = $request->product_kind;
        $product->product_matter = $request->product_matter;
        $product->product_countpage = $request->product_countpage;
        $product->leaves_one = $request->leaves_one;
        $product->leaves_two = $request->leaves_two;
        $product->leaves_three = $request->leaves_three;
        $product->status = 1;

        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;


        if ($image_one && $image_two && $image_three) {

            $image_full_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            $upload_path = 'public/media/product/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_one')->move($upload_path, $image_full_name);
            $product->image_one = $image_url;



            $image_full_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            $upload_path = 'public/media/product/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_two')->move($upload_path, $image_full_name);
            $product->image_two = $image_url;



            $image_full_name = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            $upload_path = 'public/media/product/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_three')->move($upload_path, $image_full_name);
            $product->image_three = $image_url;

            $product->save();
            return redirect(route('product.index'))->with('message', ' محصول با موفقیت اضافه گردید');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', 'categories.id')
            ->join('sub_categories', 'products.subcategory_id', 'sub_categories.id')
            ->select('products.*', 'categories.name', 'sub_categories.subcategory_name')
            ->where('products.id', $id)
            ->first();
        return view('Backend.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::where('id', $product->id)->first();

        return view('Backend.product.edit', compact('product'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $data = Product::where('id', $product->id)->first();
        $image = $data->image_one;
        $image2 = $data->image_two;
        $image3 = $data->image_three;
        unlink($image);
        unlink($image2);
        unlink($image3);
        Product::where('id', $product->id)->delete();
    
        return redirect()->back()->with('message', ' محصول با موفقیت حذف گردید');
    }

    public function inactive($id)
    {
        Product::where('id', $id)->update(['status' => 0]);
   
        return Redirect(route('product.index'))->with('message', ' محصول با موفقیت غیر فعال شد');
    }
    public function active($id)
    {
        Product::where('id', $id)->update(['status' => 1]);
 
        return Redirect(route('product.index'))->with('message', ' محصول با موفقیت فعال شد');
    }

    public function UpdateProductWithoutPhoto(Request $request, $id)
    {

        $data = array();
        $data['product_title'] = $request->product_title;
        $data['product_details'] = $request->product_details;
        $data['product_summary'] = $request->product_summary;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['product_translator'] = $request->product_translator;
        $data['product_writer'] = $request->product_writer;
        $data['discount_price'] = $request->discount_price;
        $data['selling_price'] = $request->selling_price;
        $data['product_publisher'] = $request->product_publisher;
        $data['product_level'] = $request->produxct_level;
        $data['product_kind'] = $request->product_kind;
        $data['product_matter'] = $request->product_matter;
        $data['product_countpage'] = $request->product_countpage;
        $data['leaves_one'] = $request->leaves_one;
        $data['leaves_two'] = $request->leaves_two;
        $data['leaves_three'] = $request->leaves_three;
        $data['status'] = $request->status;

        $update = DB::table('products')->where('id', $id)->update($data);
        if ($update) {
       
            return Redirect()->route('product.index')->with('message', 'محصول با موفقیت ویرایش شد');
        } else {
         
            return Redirect()->route('product.index')->with('message', ' چیزی ویرایش نشد');
        }
    }


    public function UpdateProductPhoto(Request $request, $id)
    {

        $old_one = $request->old_one;
        $old_two = $request->old_two;
        $old_three = $request->old_three;

        $data = array();

        $image_one = $request->file('image_one');
        $image_two = $request->file('image_two');
        $image_three = $request->file('image_three');


        if ($image_one) {
            unlink($old_one);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image_one->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/product/';
            $image_url = $upload_path . $image_full_name;
            $success = $image_one->move($upload_path, $image_full_name);

            $data['image_one'] = $image_url;
            $productimg = DB::table('products')->where('id', $id)->update($data);

            return Redirect()->route('product.index')->with('message', 'تصویر اول با موفقیت ویرایش شد');
        }
        if ($image_two) {
            unlink($old_two);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image_two->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/product/';
            $image_url = $upload_path . $image_full_name;
            $success = $image_two->move($upload_path, $image_full_name);

            $data['image_two'] = $image_url;
            $productimg = DB::table('products')->where('id', $id)->update($data);
        
            return Redirect()->route('product.index')->with('message', 'تصویر دوم با موفقیت ویرایش شد');
        }
        if ($image_three) {
            unlink($old_three);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image_three->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/product/';
            $image_url = $upload_path . $image_full_name;
            $success = $image_three->move($upload_path, $image_full_name);

            $data['image_three'] = $image_url;
            $productimg = DB::table('products')->where('id', $id)->update($data);
          
            return Redirect()->route('product.index')->with('message', 'تصویر سوم با موفقیت ویرایش شد');
        }
    }
}
