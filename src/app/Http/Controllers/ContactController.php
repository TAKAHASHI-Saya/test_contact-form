<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('contact-form.index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $category = Category::find($request->category_id);

        $genderLabels = [
            1 => '男性',
            2 => '女性',
            3 => 'その他',
        ];

        $contact = $request->all();

        $telString = implode($request->input('tel'));

        $contact['gender_label'] = $genderLabels[$contact['gender']];
        $contact['tel_string'] = $telString;

        session(['contact_form_data' => $request->all()]);

        return view('contact-form.confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        $contact = $request->all();
        Contact::create($contact);

        return view('contact-form.thanks');
    }
}
