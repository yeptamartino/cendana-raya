<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $inventorys = Inventory::all();
        return view('inventories.index',compact('inventorys'));
    }


    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {

        $inventory = new Inventory([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
          ]);

          $inventory->thumbnail = $imageUploader->saveImage($request, 'thumbnail');
          $inventory->save();

        return redirect('inventory')->with('status', 'success');

    }

    
    public function show(Inventory $inventory)
    {
        return view('inventories.show', compact('inventory'));
    }

  
    public function edit(Inventory $inventory)
    {
        return view('inventories.edit',compact('inventory'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->title = $request->title;
        $inventory->description = $request->description;

        if($request->file('thumbnail')) {
            $inventory->thumbnail    = $imageUploader->saveImage($request, 'thumbnail');
          }
        $inventory->save();
        return redirect('inventory')->with('status', 'Inventory updated');
    }

   
    public function destroy(Inventory $inventory)
    {
        Inventory::destroy($inventory->id);
        return redirect('inventory')->with('status', 'Inventory deleted');


    }
}
