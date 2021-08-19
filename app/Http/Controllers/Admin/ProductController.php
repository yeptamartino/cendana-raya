<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.products.index',compact('products'));
    }


    public function create()
    {
        $category = ProductCategory::all();
        return view('admin.products.create',compact('category'));
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $category = ProductCategory::all();
        //Cara 1

        // $product = new Product;
        // $product->name = $request->name;
        // $product->save();

        //Cara 2 note: di model harus di isi filable/guarded

        $product = new Product([
            'name' => $request->input('name'),
            'discount' => $request->input('discount'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            ]);
    

        $product->thumbnail = $imageUploader->saveImage($request, 'thumbnail');
        $product->save();

        // Cara 3 note: di model harus di isi filable/guarded
        // Product::create($request->all());

        return redirect('products')->with('status', 'success');

    }

    
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

  
    public function edit(Product $product)
    {
        $category = ProductCategory::all();
        return view('admin.products.edit',compact('product','category'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $request->validate(Product::$validation);
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->discount = $request->discount;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        if($request->file('thumbnail')) {
            $product->thumbnail = $imageUploader->saveImage($request, 'thumbnail');
          }
        $product->save();
        return redirect('products')->with('status', 'Product updated');
    }

   
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('products')->with('status', 'Product deleted');


    }
}
