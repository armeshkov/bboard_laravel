@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $bb->title) }}">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" rows="3">{{ old('content', $bb->content) }}</textarea>
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <textarea name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror">{{ old('price',$bb->price) }}</textarea>
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <select name="rubric_id" class="form-select my-3 @error('rubric_id') is-invalid @enderror" aria-label="Выбор категории">
                <option selected>{{ $bb->rubric->name ?? 'Не выбрана' }}</option>
                @foreach($rubrics as $rubric)
                    <option value="{{ $rubric->id }}">{{ $rubric->name }}</option>
                @endforeach
            </select>
            @error('rubric_id')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить">
    </form>

@endsection
