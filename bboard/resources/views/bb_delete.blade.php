@extends('layouts.base')

@section('title', 'Удаление объявления :: Мои объявления')

@section('main')
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }}</p>
    <p>Автор: {{ $bb->user->name }}</p>
    <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
@endsection('main)
