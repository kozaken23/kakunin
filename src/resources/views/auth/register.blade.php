@extends('layouts.app-login')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="register-form__back">
        <div class="register-form__heading">
            <h2 class="register--logo">Register</h2>
        </div>
        <div class="register-form">
            <form method="post" action="{{route('register')}}" class="form">
            @csrf
                <div class="form__input">
                    <div class="form__input--item">お名前</div>
                    <div class="form__input--content">
                        <input type="text" name="name" placeholder="例: 山田 太郎" value="{{ old('name') }}">
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
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
                <!--<div class="form__input">
                    <div class="form__input--item">パスワード（確認）</div>
                    <div class="form__input--content">
                        <input type="password" name="password_confirmation" placeholder="もう一度パスワードを入力してください">
                    </div>
                </div>-->

                <div class="form__register">
                    <button type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>


@endsection