@extends('layouts.app')

@section('content')
    @foreach($orders as $order)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $order->name }}</h3>
            </div>
            <div class="panel-body">
                <p>Цена: {{ $order->getPrice() }}</p>
                <p>Кол-во: <input type="number" name="qty" value="{{ $order->getQuantity() }}"></p>
            </div>
        </div>
    @endforeach
    <div class="panel panel-info">
        <p>Общая цена: {{ Cart::instance()->total }}</p>
        <p>Общая кол-во: {{ Cart::instance()->getQuantity() }}</p>
    </div>
@stop