@extends('layouts.main-layout')

@section('body')
    <form class="w-75" action="{{ route('createPost') }}" method="post" enctype="multipart/form-data">
        @csrf

        <h1 class="text-center">Добавить пост</h1>

        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <div class="form-group">
            <label for="image">Изображение</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
    </form>
@endsection
