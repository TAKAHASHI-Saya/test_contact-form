@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact-form/confirm.css')}}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <form action="/thanks" method="POST" class="form">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__name">
                        <input type="text" name="first_name" value="{{$contact['first_name']}}" readonly />
                        <input type="text" name="last_name" value="{{$contact['last_name']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" value="{{$contact['gender_label']}}" readonly />
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="text" name="email" value="{{$contact['email']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="text" value="{{$contact['tel_string']}}" readonly />
                        <input type="hidden" name="tel" value="{{$contact['tel_string']}}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{$contact['address']}}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{$contact['building'] ?? ''}}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="category_id" value="{{$category->content}}" readonly />
                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{$contact['detail']}}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button type="submit" class="form__button-submit">送信</button>
            <a href="{{route('contact-form.index')}}" class="form__fix-link">修正</a>
        </div>
    </form>
</div>
@endsection