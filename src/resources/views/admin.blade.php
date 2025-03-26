<!-- 管理画面 -->

@extends('layouts.app-logout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
    <div class="admin-form__content">
        <div class="admin-form__heading">
            <h2 class="heading--logo">Admin</h2>
        </div>
        <div class="admin-search__group">
            <form class="search-form" action="/search" method="get">
                
                <div class="form__input--user">
                    <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">
                </div>
                <div class="form__input--select">
                    <select name="gender">
                        <option value="" hidden>性別</option>
                        <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>男性</option>
                        <option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>女性</option>
                        <option value="3" {{ old('gender') == '3' ? 'selected' : '' }}>その他</option>
                    </select>
                </div>


                <div class="form__input--select">
                    <select name="category_id">
                        <option value="" hidden>お問い合わせの種類</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->content }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__input--date">
                    <input type="date" name="date">
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
                <div class="search-form__reset">
                    <button class="search-form__button-submit" type="reset">リセット</button>
                </div>
            </form>

            <div class="search-form__top">
                <div class="search-export">
                    <button class="export--text">エクスポート</button>
                </div>
                <div >
                    {{ $contacts->links() }}
                </div>
            </div>
            <div class="search__table">
                <table class="contact-table__inner">
                    <tr class="contact-table__header">
                        <th class="contact-table__heder--row">
                            <span class="contact-table__header-span">お名前</span>
                            <span class="contact-table__header-span">性別</span>
                            <span class="contact-table__header-span">メールアドレス</span>
                            <span class="contact-table__header-span">お問い合わせの種類</span>
                            <span class="contact-table__header-span"></span>
                        </th>
                    </tr>
                    @foreach ($contacts as $contact)
                        <tr class="contact-table__row">
                            <td class="contact-table__item">
                                <span class="contact-table__item-name">{{ $contact['name'] }}</span>
                                <span class="contact-table__item-gender">
                                    @if($contact['gender'] == 1)
                                        男性
                                    @elseif($contact['gender'] == 2)
                                        女性
                                    @elseif($contact['gender'] == 3)
                                        その他
                                    @endif
                                </span>
                                <span class="contact-table__item-email">{{ $contact['email'] }}</span>
                                <span class="contact-table__item-type">
                                    {{ $contact->category->content }}
                                </span>
                                <div class="contact-table__item-detail">
                                    <button wire:click="openModal()" type="button" class="detail">詳細</button>
                                </div> 
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@endsection