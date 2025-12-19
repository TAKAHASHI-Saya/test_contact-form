<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $contacts = Contact::Paginate(7);

        return view ('admin.admin', compact('categories', 'contacts'));
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')
        ->CategorySearch($request->category_id)
        ->KeywordSearch($request->keyword)
        ->GenderSearch($request->gender)
        ->DateSearch($request->created_at)
        ->paginate(7)
        ->appends($request->all());
        $categories = Category::all();

        return view('admin.admin', compact('categories', 'contacts'));
    }

    public function login()
    {
        return view('user.login');
    }
    public function register()
    {
        return view('user.register');
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();

        return redirect()->route('admin');
    }

    public function exportCsv(Request $request): StreamedResponse
    {
        $query = Contact::with('category')
            ->CategorySearch($request->category_id)
            ->KeywordSearch($request->keyword)
            ->GenderSearch($request->gender)
            ->DateSearch($request->created_at);
        $contacts = $query->get();

        $headers = [
            'Content-Type' => 'text/csv; charset=Shift_JIS',
            'Content-Disposition' => 'attachment; filename="contact.csv"',
        ];
        $columns = [
            'id' => 'ID',
            'name' => 'お名前',
            'gender' => '性別',
            'email' => 'メールアドレス',
            'tel' => '電話番号',
            'address' => '住所',
            'building' => '建物名',
            'category' => 'お問い合わせの種類',
            'detail' => 'お問い合わせ内容',
            'created_at' => '登録日時',
        ];

        return response()->streamDownload(function()use($contacts, $columns){
            $stream = fopen('php://output', 'w');
            fputcsv($stream, array_map(fn($v) => mb_convert_encoding($v, 'SJIS-win', 'UTF-8'), array_values($columns)));
            foreach($contacts as $contact){
                $row = [
                    $contact->id,
                    $contact->first_name . ' ' . $contact->last_name,
                    $contact->gender == 1 ? '男性' : ($contact->gender == 2 ? '女性' : 'その他'),
                    $contact->email,
                    $contact->tel,
                    $contact->address,
                    $contact->building,
                    optional($contact->category)->content,
                    $contact->detail,
                    $contact->created_at,
                ];

                fputcsv($stream, array_map(fn($v) => mb_convert_encoding($v ?? '', 'SJIS-win', 'UTF-8'), $row));
            }
            fclose($stream);
        }, 'contacts.csv', $headers);
    }
}
