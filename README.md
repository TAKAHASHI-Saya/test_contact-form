# test_contact-form

## 環境構築
### Dockerビルド
- git clone git@github.com:TAKAHASHI-Saya/test_contact-form.git
- docker-compose up -d --build

### Laravel環境構築
- docker-composer exec php bash
- composer install
- cp .env.example .env, 環境変数を適宜変更
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## 開発環境
- お問い合わせ画面： http://localhost/
- ユーザー登録： http://localhost/register
- phpMyAdmin： Http://localhost:8080/

## 使用技術（実行環境）
- PHP 8.4.12
- Laravel Framework 8.83.29
- Composer version 2.9.2
- nginx 1.21.
- mysql  Ver 8.0.26 for Linux on x86_64

## ER図
![ER図](./src/docs/test_er.png)


