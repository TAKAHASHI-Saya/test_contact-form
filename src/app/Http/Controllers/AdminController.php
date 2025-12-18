<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

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
}
