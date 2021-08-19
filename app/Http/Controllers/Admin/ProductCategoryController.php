<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $categories = ProductCategory::all();
        return view('admin.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(ProductCategory::$validation);
        //Cara 1

        $category = new ProductCategory;
        $category->name = $request->name;
        // $category->save();

        //Cara 2 note: di model harus di isi filable/guarded

        // ProductCategory::create([
        //     'name' =>$request->name,
        // ]);

      
          
          $category->save();

        // Cara 3 note: di model harus di isi filable/guarded
        // ProductCategory::create($request->all());

        return redirect('category')->with('status', 'success');

    }

    
    public function show(ProductCategory $category)
    {
        return view('admin.categories.show', compact('category'));
    }

  
    public function edit(ProductCategory $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $request->validate(ProductCategory::$validation);
        $category = ProductCategory::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return redirect('categories')->with('status', 'Category updated');
    }

   
    public function destroy(ProductCategory $category)
    {
        ProductCategory::destroy($category->id);
        return redirect('categories')->with('status', 'Category deleted');


    }
}
