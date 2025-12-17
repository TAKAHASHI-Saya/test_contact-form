@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact-form/index.css')}}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form action="/confirm" method="POST" class="form">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="first_name" value="{{old('first_name', session('contact_form_data.first_name'))}}" placeholder="例：山田">
                    <input type="text" name="last_name" value="{{old('last_name', session('contact_form_data.last_name'))}}" placeholder="例：太郎">
                </div>
                <div class="form__error">
                    @error('first_name')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-tittle">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label class="radio-label">
                        <input type="radio" name="gender" value="1" {{old('gender', session('contact_form_data.gender', '')) == '1' ? 'checked' : ''}}>
                        男性
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="gender" value="2" {{old('gender', session('contact_form_data.gender', '')) == '2' ? 'checked' : ''}}>
                        女性
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="gender" value="3" {{old('gender', session('contact_form_data.gender', '')) == '3' ? 'checked' : ''}}>
                        その他
                    </label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-tittle">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{old('email', session('contact_form_data.email'))}}" placeholder="例：test@example.com">
                </div>
                <div class="form__error">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-tittle">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input type="tel" name="tel[1]" value="{{old('tel.1', session('contact_form_data.tel.1'))}}" placeholder="例：080">
                    <span>-</span>
                    <input type="tel" name="tel[2]" value="{{old('tel.2', session('contact_form_data.tel.2'))}}" placeholder="例：1234">
                    <span>-</span>
                    <input type="tel" name="tel[3]" value="{{old('tel.3', session('contact_form_data.tel.3'))}}" placeholder="例：5678">
                </div>
                <div class="form__error">
                    @error('tel.1')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-tittle">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{old('address', session('contact_form_data.address'))}}" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
                </div>
                <div class="form__error">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-tittle">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" value="{{old('building', session('contact_form_data.building', ''))}}" placeholder="例：千駄ヶ谷マンション101">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-tittle">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__select">
                    <select name="category_id">
                        <option value="" disabled {{old('category_id', session('contact_form_data.category_id')) ? '' : 'selected'}}>
                            選択してください
                        </option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{old('category_id', session('contact_form_data.category_id')) == $category->id ? 'selected' : ''}}>
                            {{$category->content}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">
                        {{old('detail', session('contact_form_data.detail'))}}
                    </textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button type="submit" class="form__button-submit">確認画面</button>
        </div>
    </form>
</div>
@endsection