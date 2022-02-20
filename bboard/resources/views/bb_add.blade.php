@extends('layouts.base')

@section('title', 'Добавление объявления :: Мои объявления')

@section('main')
    <form action="{{ route('bb.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input name="title" id="txtTitle" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <textarea name="price" id="txtPrice" class="form-control"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>

@endsection
