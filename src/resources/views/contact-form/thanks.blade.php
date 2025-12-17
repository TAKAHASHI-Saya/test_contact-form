@extends('layout.app')

@php
    $noHeader = true;
@endphp

@section('css')
<link rel="stylesheet" href="{{asset('css/contact-form/thanks.css')}}">
@endsection

@section('content')
    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>お問い合わせありがとうございました</h2>
        </div>
        <div class="home__button">
            <a href="{{route('contact-form.index')}}" class="home__link">HOME</a>
        </div>
    </div>
@endsection
