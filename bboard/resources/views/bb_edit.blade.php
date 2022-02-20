@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input name="title" id="txtTitle" class="form-control" value="{{ $bb->title }}">
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" class="form-control" rows="3">{{ $bb->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <textarea name="price" id="txtPrice" class="form-control">{{ $bb->price }}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить">
    </form>

@endsection
