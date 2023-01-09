@extends('layouts.main-layout')

@section('body')
    <div class="w-100 mt-4">

        <div class="input-group mb-2">
            <span class="w-25 input-group-text">Логин и Пароль</span>
            <input disabled type="text" name="login" id="login" class="form-control" value="{{ Auth::user()->login }}">
            <input disabled type="password" name="password" id="password" class="form-control" value="{{ Auth::user()->password }}">
        </div>

        <div class="input-group mb-2">
            <span class="w-25 input-group-text">Лайки и Дизлайки</span>
            <input disabled type="text" class="form-control" value="{{ $likesCount }}">
            <input disabled type="text" class="form-control" value="{{ $dislikesCount }}">
        </div>

        <div class="input-group mb-2">
            <span class="w-25 input-group-text">Кол-во созданных постов:</span>
            <input disabled type="text" class="form-control" value="{{ $postsCount }}">
        </div>

        <div class="btn-group w-100" role="group" aria-label="Basic example">
            <a href="{{ route('ownPosts') }}" type="button" class="btn btn-primary">Ваши посты</a>
            <a href="{{ route('posts') }}" type="button" class="btn btn-primary">Главная</a>
        </div>

    </div>
@endsection
