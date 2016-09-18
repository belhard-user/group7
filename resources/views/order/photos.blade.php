@extends('layouts.app')

@section('content')
    @foreach($photos as $photo)
        <a  href="{{ route('slaves.order', ['id' => $photo->id]) }}">
            <img src="/{{ $photo->th_path }}" >
        </a>
    @endforeach
@stop