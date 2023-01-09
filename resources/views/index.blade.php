@extends('layouts.main-layout')

@section('body')

    <div class="posts-block gap-4 mt-5">
        @foreach($posts as $post)
            <div class="card">
                <img src="{{ asset('image/'.$post->image) }}" style="width: 100%; height: 200px;" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>

                    <div class="d-grid gap-1">
                        <form action="{{ route('ratePost', ['postId' => $post->id, 'type' => 'like']) }}" method="post">
                            @csrf
                            <button type="submit" href="#" class="w-100 btn btn-primary">Like</button>
                        </form>
                        <form action="{{ route('ratePost', ['postId' => $post->id, 'type' => 'dislike']) }}" method="post">
                            @csrf
                            <button type="submit" href="#" class="w-100 btn btn-danger">Dislike</button>
                        </form>
                    </div>

                </div>
            </div>
     @endforeach
    </div>

@endsection
