@extends('layouts.base')

@section('title', $bb->title)

@section('main')
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }}</p>
    <p><a href="/">На перечень объявлений</a></p>
@endsection('main)
