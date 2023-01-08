@extends('layouts.main-layout')

@section('body')

    <div class="d-flex justify-content-between mt-5">
        @foreach($posts as $post)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/'.$post->image) }}" style="width: 100%; height: 200px;" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>

                    <div class="d-flex gap-1">
                        <button href="#" class="btn btn-primary">Like</button>
                        <button href="#" class="btn btn-danger">Dislike</button>
                    </div>

                </div>
            </div>
     @endforeach
    </div>

@endsection
