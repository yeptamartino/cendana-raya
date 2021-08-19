<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\TrackOrder;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;

class TrackOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $track_orders = TrackOrder::all();
        return view('admin.track-orders.index',compact('track_orders'));
    }


    public function create()
    {
        return view('admin.track-orders.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {

        $track_order = new TrackOrder([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
          ]);

          $track_order->thumbnail = $imageUploader->saveImage($request, 'thumbnail');
          $track_order->save();

        return redirect('track-order')->with('status', 'success');

    }

    
    public function show(TrackOrder $track_order)
    {
        return view('admin.track-orders.show', compact('track_order'));
    }

  
    public function edit(TrackOrder $track_order)
    {
        return view('admin.track-orders.edit',compact('track_order'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $track_order = TrackOrder::findOrFail($id);
        $track_order->title = $request->title;
        $track_order->description = $request->description;

        if($request->file('thumbnail')) {
            $track_order->thumbnail    = $imageUploader->saveImage($request, 'thumbnail');
          }
        $track_order->save();
        return redirect('track-order')->with('status', 'TrackOrder updated');
    }

   
    public function destroy(TrackOrder $track_order)
    {
        TrackOrder::destroy($track_order->id);
        return redirect('track-order')->with('status', 'TrackOrder deleted');


    }
}
