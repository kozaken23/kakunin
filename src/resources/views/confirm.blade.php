<!-- 確認フォーム -->

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }} ">
@endsection

@section('content')
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2 class="confirm__heading--logo">Confirm</h2>
            </div>

            <form class="form" action="/thanks" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <p>{{ $contact['name'] }}</p>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <p>
                                    @if($contact['gender'] == 1)
                                        男性
                                    @elseif($contact['gender'] == 2)
                                        女性
                                    @elseif($contact['gender'] == 3)
                                        その他
                                    @endif
                                </p>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <p>{{ $contact['email'] }}</p>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <p>{{ $contact['tel'] }}</p>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <p>{{ $contact['address'] }}</p>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <p>{{ $contact['bldg'] }}</p>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <p>{{ $categories[$contact['category_id']] }}</p>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <p>{{ $contact['detail'] }}</p>
                            </td>
                        </tr>
                    </table>
                </div>

                <input type="hidden" name="name" value="{{ $contact['name'] }}">
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                <input type="hidden" name="email" value="{{ $contact['email'] }}">
                <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                <input type="hidden" name="address" value="{{ $contact['address'] }}">
                <input type="hidden" name="bldg" value="{{ $contact['bldg'] }}">
                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">


                <div class="confirm__post">
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">送信</button>
                    </div>

                    <div class="form__correction">
                        <a href="/">修正 </a>
                    </div>
                </div>

            </form>
        </div>
@endsection