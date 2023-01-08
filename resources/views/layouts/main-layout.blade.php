<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinterest</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-end">
            @guest
            <form class="d-flex gap-1">
                <a href="{{ route('login') }}"  class="btn btn-outline-success" type="submit">Войти</a>
                <a href="{{ route('register') }}" class="btn btn-outline-success" type="submit">Регистрация</a>
            </form>
            @else
                <div class="d-flex align-items-center align-content-center gap-1">
                    <a class="btn btn-primary">Ваши посты</a>

                    <a class="btn btn-primary">Личный кабинет</a>

                    <a class="btn btn-primary">Админ панель</a>

                    <a class="btn btn-primary">Добавить пост</a>

                    <a class="btn btn-primary">Понравившиеся</a>

                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="btn btn-danger"
                       href="{{ route('logout') }}">
                        Выйти
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            @endguest
        </div>
    </nav>
    <div class="container-lg d-flex justify-content-center">
        @yield('body')
    </div>
</body>
</html>
