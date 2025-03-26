<!-- お問い合わせフォーム -->

@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2 class="heading--logo">Contact</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <!-- name -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--name">
                        <div>
                            <input type="text" name="first-name" placeholder="例: 山田" value="{{ old('first-name') }}">
                            @error('first-name')
                                <div class="form__error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <input type="text" name="last-name" placeholder="例: 太郎" value="{{ old('last-name') }}">
                            @error('last-name')
                                <div class="form__error">
                                    {{ $message }}
                                </div> 
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="form__error--group">
            </div>
            <!-- gender -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <label><input type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }} />男性<label>
                    <label><input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}/>女性<label>
                    <label><input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}/>その他<label>
                </div>
            </div>
            @error('gender')
                <div class="form__error">
                    {{ $message }}
                </div>
            @enderror

            <!-- email -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="form__error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>


            <!-- tel -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div>
                        <div class="form__input--tel">
                            <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}">-
                            <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}">-
                            <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
                        </div>
                        @error('tel')
                            <div class="form__error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>


            <!-- address -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                        @error('address')
                            <div class="form__error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- building -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="bldg" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('bldg') }}">
                    </div>
                </div>
            </div>

            <!-- type -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div>
                        <div class="form__input--type">
                        <select  name="category_id">
                            <option value="" hidden>選択してください</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"  {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->content }}</option>
                            @endforeach
                        </select>
                        </div>
                        @error('category_id')
                            <div class="form__error">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- text -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                    </div>
                </div>
            </div>
            @error('detail')
                <div class="form__error">
                    {{ $message }}
                </div>
            @enderror


            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
@endsection