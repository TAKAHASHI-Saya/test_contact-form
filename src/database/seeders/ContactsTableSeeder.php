<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '花子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 1,
            'detail' => '注文した商品が全く届きません'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '加藤',
            'last_name' => '太郎',
            'gender' => 3,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => 'プレゼント用の包装をお願いしましたが、包装紙が破れていました。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '松井',
            'last_name' => '恵子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 4,
            'detail' => '年末年始の営業時間と発送日を教えて下さい'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 4,
            'detail' => '年末年始の営業時間と発送日を教えて下さい'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '花子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 5,
            'detail' => 'いつも素敵な商品をありがとうございます。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '加藤',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 1,
            'detail' => '注文した商品が全く届きません'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '花子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 1,
            'detail' => '注文した商品が全く届きません'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => 'プレゼント用の包装をお願いしましたが、包装紙が破れていました'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '花子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => 'プレゼント用の包装をお願いしましたが、包装紙が破れていました'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '加藤',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => 'プレゼント用の包装をお願いしましたが、包装紙が破れていました'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '松井',
            'last_name' => '恵子',
            'gender' => 3,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '松井',
            'last_name' => '恵子',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => 'プレゼント用の包装をお願いしましたが、包装紙が破れていました'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 1,
            'detail' => '注文した商品が全く届きません'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '松井',
            'last_name' => '恵子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => 'プレゼント用の包装をお願いしましたが、包装紙が破れていました'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '鈴木',
            'last_name' => '亜希子',
            'gender' => 3,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 1,
            'detail' => '注文した商品が全く届きません'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '鈴木',
            'last_name' => '亜希子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 5,
            'detail' => 'プレゼント用に購入しました。喜んでもらえました。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '花子',
            'gender' => 2,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '秋山',
            'last_name' => 'ゆずる',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => '商品が到着しましたが、ほつれている部分がありました。返金はできますか？'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => '商品が到着しましたが、ほつれている部分がありました。返金はできますか？'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '花子',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 3,
            'detail' => '商品が到着しましたが、ほつれている部分がありました。返金はできますか？'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'category_id' => 2,
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
        ];
        DB::table('contacts')->insert($param);
    }
}
