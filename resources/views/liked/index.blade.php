@extends('layouts.main-layout')

@section('body')

    <div class="d-flex flex-column">
        <div class="gap-4 mt-5 mb-5">
            <h1 class="text-center w-100 mb-5">Лайки</h1>
            <div class="posts-block">
                @foreach($posts as $post)
                    @if($post->type == 'like')
                        <div class="card">
                            <img src="{{ asset('image/'.$post->post()->image) }}" style="width: 100%; height: 200px;"
                                 class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->post()->title }}</h5>
                                <p class="card-text">{{ $post->post()->description }}</p>

                                <div class="d-grid gap-1">
                                    <form
                                        action="{{ route('removeRating', ['postId' => $post->post()->id]) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" href="#" class="w-100 btn btn-danger">Удалить</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div>
            <h1 class="text-center w-100 mb-5">Дизлайки</h1>
            <div class="posts-block">
                @foreach($posts as $post)
                    @if($post->type == 'dislike')
                        <div class="card">
                            <img src="{{ asset('image/'.$post->post()->image) }}" style="width: 100%; height: 200px;"
                                 class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->post()->title }}</h5>
                                <p class="card-text">{{ $post->post()->description }}</p>

                                <div class="d-grid gap-1">
                                    <form
                                        action="{{ route('removeRating', ['postId' => $post->post()->id]) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" href="#" class="w-100 btn btn-danger">Удалить</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>

@endsection
