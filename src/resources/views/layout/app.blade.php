<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layout/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout/sanitize.css')}}">
    @yield('css')
</head>
<body>
    @if(!isset($noHeader) || !$noHeader)
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                FashionablyLate
            </a>
        </div>
    </header>
    @endif
    <main>
        @yield('content')
    </main>
</body>
</html>