@extends('layouts.main-layout')

@section('body')

    <div class="d-flex flex-column">

        <div class="row d-flex justify-content-center gap-4 mt-5">

            <h1 class="text-center w-100">Понравившиеся</h1>

            @foreach($posts as $post)
                @if($post->type == 'like')
                    <div class="card" style="width: 30%;">
                        <img src="{{ asset('image/'.$post->post()->image) }}" style="width: 100%; height: 200px;"
                             class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->post()->title }}</h5>
                            <p class="card-text">{{ $post->post()->description }}</p>

                            <div class="d-grid gap-1">
                                <form
                                    action="{{ route('ratePost', ['postId' => $post->post()->id, 'type' => 'like']) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit" href="#" class="w-100 btn btn-primary">Like</button>
                                </form>
                                <form
                                    action="{{ route('ratePost', ['postId' => $post->post()->id, 'type' => 'dislike']) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit" href="#" class="w-100 btn btn-danger">Dislike</button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="row d-flex flex-wrap justify-content-center gap-4 mt-5">

            <h1 class="text-center w-100">Не понравившиеся</h1>

            @foreach($posts as $post)
                @if($post->type == 'dislike')
                    <div class="card" style="width: 30%;">
                        <img src="{{ asset('image/'.$post->post()->image) }}" style="width: 100%; height: 200px;"
                             class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->post()->title }}</h5>
                            <p class="card-text">{{ $post->post()->description }}</p>

                            <div class="d-grid gap-1">
                                <form
                                    action="{{ route('ratePost', ['postId' => $post->post()->id, 'type' => 'like']) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit" href="#" class="w-100 btn btn-primary">Like</button>
                                </form>
                                <form
                                    action="{{ route('ratePost', ['postId' => $post->post()->id, 'type' => 'dislike']) }}"
                                    method="post">
                                    @csrf
                                    <button type="submit" href="#" class="w-100 btn btn-danger">Dislike</button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>

@endsection
