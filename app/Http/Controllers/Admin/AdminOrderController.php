<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function index()
    {
        Order::orderBy('id', 'desc')->each(function($item){
            echo "<h1>{$item->name}</h1>";
            foreach ($item->image as $image){
                echo "<img width='200' src='/".$image->path."'>";
            }
            echo "<hr>";
        });
    }
    public function create()
    {
        return view('admin.order.create');
    }

    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());

        if($request->hasFile('images')){
            foreach ($request->file('images') as $item) {
                $order->image()->create([
                    'path' => $item->store('orders', 'orders')
                ]);

                /*\App\Image::create([
                    'order' => $order->id,
                    'path' => $item->store('orders', 'orders')
                ]);*/
            }
        }
        // $order = Order::firstOrNew($request->except('_token')); $order->save()
        // $order = Order::firstOrCreate($request->except('_token'));

        // $order = new Order($request->all()); $order->save()
        // $order = Order::create($request->all());

        /*$order = new Order();

        $order->age = $request->input('age');
        $order->name = $request->input('name');
        $order->weight = $request->input('weight');
        $order->height = $request->input('height');
        $order->price = $request->input('price');
        $order->special_price = $request->input('special_price');

        $order->save();*/

        return redirect()->back();
    }
}
