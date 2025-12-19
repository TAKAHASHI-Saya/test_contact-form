@extends('layout.user-app')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/admin.css')}}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>Admin</h2>
    </div>
    <div class="search__content">
        <form action="/search" method="get" class="search-form">
            <input type="text" name="keyword" class="search-form__item--text" placeholder="名前やメールアドレスを入力してください">
            <select name="gender" class="search-form__item--select">
                <option value="">性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select name="category_id" class="search-form__item--select">
                <option value="">お問い合わせの種類</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->content}}
                </option>
                @endforeach
            </select>
            <input type="date" name="created_at" class="search-form__item--date">
            <button type="submit" class="search-form__button">検索</button>
        </form>
        <a href="{{route('admin')}}" class="search-form__reset">リセット</a>
    </div>
    <div class="other__content">
        <div class="export">
            <form action="{{route('export')}}" method="get" class="export-form">
                <input type="hidden" name="keyword" value="{{request('keyword')}}">
                <input type="hidden" name="gender" value="{{request('gender')}}">
                <input type="hidden" name="category_id" value="{{request('category_id')}}">
                <input type="hidden" name="created_at" value="{{request('created_at')}}">
                <button type="submit" class="export-form__button">エクスポート</button>
            </form>
        </div>
        <div class="pagination">
        {{$contacts->links()}}
        </div>
    </div>
    <div class="admin-table">
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header">
                    <span class="admin-table__header--span">お名前</span>
                </th>
                <th class="admin-table__header">
                    <span class="admin-table__header--span">性別</span>
                </th>
                <th class="admin-table__header">
                    <span class="admin-table__header--span">メールアドレス</span>
                </th>
                <th class="admin-table__header">
                    <span class="admin-table__header--span">お問い合わせの種類</span>
                </th>
                <th class="admin-table__header"></th>
            </tr>
            @foreach($contacts as $contact)
            <tr class="admin-table__row--hover">
                <td class="admin-table__item">
                    {{$contact['first_name']}}
                    {{$contact['last_name']}}
                </td>
                <td class="admin-table__item">
                    @if($contact['gender'] == 1)
                    男性
                    @elseif($contact['gender'] == 2)
                    女性
                    @else($contact['gender'] == 3)
                    その他
                    @endif
                </td>
                <td class="admin-table__item">
                    {{$contact['email']}}
                </td>
                <td class="admin-table__item">
                    {{$contact->category->content}}
                </td>
                <td class="admin-table__item">
                    <button type="button" class="detail-button" data-name="{{$contact['first_name']}}{{$contact['last_name']}}"
                    data-gender="{{$contact['gender']}}"
                    data-email="{{$contact['email']}}"
                    data-tel="{{$contact['tel']}}"
                    data-address="{{$contact['address']}}"
                    data-building="{{$contact['building']}}"
                    data-category="{{$contact->category->content}}"
                    data-detail="{{$contact['detail']}}"
                    data-id="{{$contact['id']}}">詳細</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div id="detail-modal" class="modal">
    <div class="modal__overlay"></div>
    <div class="modal__content">
        <button type="button" class="modal__close" id="modal-close">
            <span class="modal__close-icon">✕</span>
        </button>
        <table class="modal__table">
            <tr class="modal__table-inner">
                <th class="modal__table-header">お名前</th>
                <td id="modal-name"></td>
            </tr>
            <tr class="modal__table-inner">
                <th class="modal__table-header">性別</th>
                <td id="modal-gender">
                </td>
            </tr>
            <tr class="modal__table-inner">
                <th class="modal__table-header">メールアドレス</th>
                <td id="modal-email"></td>
            </tr>
            <tr class="modal__table-inner">
                <th class="modal__table-header">電話番号</th>
                <td id="modal-tel"></td>
            </tr>
            <tr class="modal__table-inner">
                <th class="modal__table-header">住所</th>
                <td id="modal-address"></td>
            </tr>
            <tr class="modal__table-inner">
                <th class="modal__table-header">建物名</th>
                <td id="modal-building"></td>
            </tr>
            <tr class="modal__table-inner">
                <th class="modal__table-header">お問い合わせの種類</th>
                <td id="modal-category"></td>
            </tr>
            <tr class="modal__table-inner">
                <th class="modal__table-header">お問い合わせの内容</th>
                <td id="modal-detail"></td>
            </tr>
        </table>
        <form action="/delete" method="post" class="delete-form">
            @method('DELETE')
            @csrf
            <div class="delete-form__button">
                <input type="hidden" name="id" id="delete-id">
                <button type="submit"class="delete-form__button-submit">削除</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('detail-modal');
    const overlay = modal.querySelector('.modal__overlay');
    const closeBtn = document.getElementById('modal-close');

    const genderMap = {
        '1': '男性',
        '2': '女性',
        '3': 'その他'
    };

    const nameSpan = document.getElementById('modal-name');
    const genderSpan = document.getElementById('modal-gender');
    const emailSpan = document.getElementById('modal-email');
    const telSpan = document.getElementById('modal-tel');
    const addressSpan = document.getElementById('modal-address');
    const buildingSpan = document.getElementById('modal-building');
    const categorySpan = document.getElementById('modal-category');
    const detailSpan = document.getElementById('modal-detail');
    const deleteIdInput = document.getElementById('delete-id');

    document.querySelectorAll('.detail-button').forEach((btn) => {
        btn.addEventListener('click', () => {
            nameSpan.textContent = btn.dataset.name;
            genderSpan.textContent = genderMap[btn.dataset.gender] || '未設定';
            emailSpan.textContent = btn.dataset.email;
            telSpan.textContent = btn.dataset.tel || '';
            addressSpan.textContent = btn.dataset.address || '';
            buildingSpan.textContent = btn.dataset.building || '';
            categorySpan.textContent = btn.dataset.category;
            detailSpan.textContent = btn.dataset.detail || '';

            if (deleteIdInput) {
                deleteIdInput.value = btn.dataset.id || '';
            }

            modal.classList.add('is-active');
        });
    });

    const closeModal = () => modal.classList.remove('is-active');
    overlay.addEventListener('click', closeModal);
    closeBtn.addEventListener('click', closeModal);
});
</script>

@endsection