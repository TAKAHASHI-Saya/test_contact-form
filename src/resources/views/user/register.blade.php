@extends('layout.user-app')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/register.css')}}">
@endsection

@section('content')
<div class="register__content">
    <div class="register__heading">
        <h2>Register</h2>
    </div>
    <div class="register__form">
        <form action="/register" method="post" class="form">
            @csrf
            <div class="form__group">
                <div class="form__group-tittle">
                    <span class="form__label-item">お名前</span>
                </div>
                <div class="form__input">
                    <input type="text" name="name" value="{{old('name')}}" placeholder="例：山田 太郎">
                </div>
                <div class="form__error">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
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
                <button type="submit" class="form__button-submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection