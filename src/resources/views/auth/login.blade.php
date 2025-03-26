@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection


@extends('layouts.app-register')
@section('content')

    <div class="login-form__back">
        <div class="login-form__heading">
            <h2 class="login--logo">Login</h2>
        </div>
        <div class="login-form">
            <form action="{{ route('login') }}" method="post" class="form">
                @csrf

                <div class="form__input">
                    <div class="form__input--item">メールアドレス</div>
                    <div class="form__input--content">
                        <input type="text" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="form__input">
                    <div class="form__input--item">パスワード</div>
                    <div class="form__input--content">
                        <input type="password" name="password" placeholder="例: coachtech1106" value="{{ old('password') }}">
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form__login">
                    <button type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </div>
@endsection()