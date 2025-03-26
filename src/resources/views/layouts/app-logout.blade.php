<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionblyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Serif+JP:wght@200..900&display=swap"
        rel="stylesheet">
    @yield('css')
    @livewireStyles
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <h1 class="header__logo">
                    FashionablyLate
                </h1>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="header__login">
                        Logout
                    </button>
                </form>

            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    @livewireScripts
</body>

</html>