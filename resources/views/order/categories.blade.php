@extends('layouts.app')

@section('content')
    @foreach($categories as $category)
        <a  href="{{ route('slaves.category_products', ['id' => $category->id]) }}" class="label label-warning">
            {{ $category->title }}
        </a>
        <hr>
    @endforeach
@stop