@extends('layouts.main-layout')

@section('body')
    <div class="w-100">

        <h1 class="text-center">Админ панель</h1>

        <table class="table table-primary">
            <tbody>
            @foreach($posts as $post)
                <form action="" method="POST">
                    <tr>
                        <td>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ $post->title }}">
                        </td>
                        <td>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ $post->description }}">
                        </td>
                        <td>
                            <input class="form-control" type="file" id="formFile">
                        </td>
                        <td class="d-grid gap-1">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                </form>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
