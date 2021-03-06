<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cart;

class ProductController extends Controller
{
	public function ProductView($id, $product_name)
	{

		$product = DB::table('products')
			->join('categories', 'products.category_id', 'categories.id')
			->join('sub_categories', 'products.subcategory_id', 'sub_categories.id')
			->join('brands', 'products.brand_id', 'brands.id')
			->select('products.*', 'categories.category_name', 'sub_categories.subcategory_name', 'brands.brand_name')
			->where('products.id', $id)
			->first();

		$color = $product->product_color;
		$product_color = explode(',', $color);

		$size = $product->product_size;
		$product_size = explode(',', $size);

		return view('Frontend.product.index', compact('product', 'product_color', 'product_size'));
	}


	public function AddCart(Request $request, $id)
	{
		$product = DB::table('products')->where('id', $id)->first();

		$data = array();

		if ($product->discount_price == NULL) {
			$data['id'] = $product->id;
			$data['name'] = $product->product_name;
			$data['qty'] = $request->qty;
			$data['price'] = $product->selling_price;
			$data['weight'] = 1;
			$data['options']['image'] = $product->image_one;
			$data['options']['color'] = $request->color;
			$data['options']['size'] = $request->size;
			Cart::add($data);
			$notification = array(
				'messege' => 'Product Successfully Added',
				'alert-type' => 'success'
			);
			return Redirect()->back()->with($notification);
		} else {

			$data['id'] = $product->id;
			$data['name'] = $product->product_name;
			$data['qty'] = $request->qty;
			$data['price'] = $product->discount_price;
			$data['weight'] = 1;
			$data['options']['image'] = $product->image_one;
			$data['options']['color'] = $request->color;
			$data['options']['size'] = $request->size;
			Cart::add($data);
			$notification = array(
				'messege' => 'Product Successfully Added',
				'alert-type' => 'success'
			);
			return Redirect()->back()->with($notification);
		}
	}



	public function ProductsView($id)
	{

		$products = DB::table('products')->where('subcategory_id', $id)->simplePaginate(10);

		$categorys = DB::table('categories')->get();

		$brands = DB::table('products')->where('subcategory_id', $id)->select('brand_id')->groupBy('brand_id')->get();

		return view('pages.all_products', compact('products', 'categorys', 'brands'));
	}


	public function CategoryView($id)
	{
		$category_all =  DB::table('products')->where('category_id', $id)->simplePaginate(10);
		return view('pages.all_category', compact('category_all'));
	}
}
