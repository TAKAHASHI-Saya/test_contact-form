<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layout/user-common.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout/sanitize.css')}}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__content">
            <div class="header__inner">
            <a href="/" class="header__logo">
                FashionablyLate
            </a>
        </div>
        <div class="header__menu">
            <nav>
                <ul class="header__nav">
                    @guest
                    <li>
                        <a href="{{route('register')}}" class="register__button">register</a>
                    </li>
                    <li>
                        <a href="{{route('login')}}" class="login__button">login</a>
                    </li>
                    @endguest
                    @if(Auth::check())
                    <li>
                        <form action="{{route('logout')}}" method="post" class="logout">
                            @csrf
                            <button type="submit" class="logout__button">logout</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>