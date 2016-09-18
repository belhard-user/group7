<?php

namespace App\Http\Controllers;

use Cart;
use App\Order;
use App\Http\Requests;
use Syscover\ShoppingCart\Item;

class CartController extends Controller
{
    public function add(Order $order)
    {
        Cart::instance()->add(new Item(
            $order->id, $order->name, 1, $order->getPrice()
        ));

        flash('Товар добавлен в корзину');

        return redirect()->back();
    }

    public function checkout()
    {
        $orders = Cart::instance()->getCartItems();

        return view('cart.checkout', compact('orders'));
    }
}
