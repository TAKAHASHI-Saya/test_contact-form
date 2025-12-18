@extends('layout.user-app')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/login.css')}}">
@endsection

@section('content')
<div class="login__content">
    <div class="login__heading">
        <h2>Login</h2>
    </div>
    <div class="login__form">
        <form action="/login" method="post" class="form">
            @csrf
            <div class="form__group">
                <div class="form__group-tittle">
                    <span class="form__label-item">メールアドレス</span>
                </div>
                <div class="form__input">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="例：test@example.com">
                </div>
                <div class="form__error">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-tittle">
                    <span class="form__label-item">パスワード</span>
                </div>
                <div class="form__input">
                    <input type="password" name="password" placeholder="例：coachtech1106">
                </div>
                <div class="form__error">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button type="submit" class="form__button-submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection