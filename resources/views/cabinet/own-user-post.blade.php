@extends('layouts.main-layout')

@section('body')

    <div>
        <h1 class="text-center w-100">Ваши посты</h1>

        <div class="posts-block">
            @foreach($posts as $post)
                <div class="card">
                    <img src="{{ asset('image/'.$post->image) }}" style="width: 100%; height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="d-grid gap-1">
                            <form
                                action="{{ route('postRemove', ["postId" => $post->id]) }}"
                                method="post">
                                @csrf
                                <button type="submit" href="#" class="w-100 btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
           @endforeach
        </div>
    </div>

@endsection
