@extends('layout')

@section('content')
    <img src="{{ asset('images/' . $photo->image) }}" alt="" style="width: 300px">
@endsection