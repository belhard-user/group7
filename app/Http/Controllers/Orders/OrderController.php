<?php

namespace App\Http\Controllers\Orders;

use App\Image;
use DB;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orderList()
    {
        $orders = \App\Order::with('image', 'categories')->orderBy('id', 'DESC')->paginate();

        return view('order.lists', compact('orders'));
    }

    public function category()
    {
        return view('order.categories', [
            'categories' => Category::all()
        ]);
    }

    public function categoryProducts(Category $category)
    {
        return $category->orders->toArray();
    }

    public function photos()
    {
        return view('order.photos', [
            'photos' => Image::all()
        ]);
    }

    public function slave(Image $image)
    {
        dd($image->order);
    }

    public function order($id)
    {
        dd(DB::table('orders')->whereId($id)->first());
    }
}
