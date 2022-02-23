@extends('layouts.base')

@section('title', $bb->title)

@section('main')
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }}</p>
    <p>Автор: {{ $bb->user->name }}</p>
    <p>Категория: {{$bb->rubric->name}}</p>
    <p><a href="{{ route('index') }}">На перечень объявлений</a></p>
@endsection('main)
