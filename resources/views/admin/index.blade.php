@extends('layouts.main-layout')

@section('body')
    <div class="w-100">

        <h1 class="text-center">Админ панель</h1>

        <table class="table table-hover">
            <tbody>
            @foreach($posts as $post)
                <form action="{{ route('postEdit', ['postId' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="title" id="title" placeholder="{{ $post->title }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="description" id="description" placeholder="{{ $post->description }}">
                        </td>
                        <td>
                            <input class="form-control" type="file" name="image" id="image">
                        </td>
                        <td class="d-flex gap-1">
                            <form>
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </form>
                            <form
                                action="{{ route('postRemove', ['postId' => $post->id]) }}"
                                method="post"
                            >
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                </form>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
