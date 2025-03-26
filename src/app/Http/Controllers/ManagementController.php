<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\User;

class ManagementController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::with('category')->paginate(7);
        $categories = Category::all();

        return view('admin', compact('contacts','categories'));
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->GenderSearch($request->gender)->DateSearch($request->date)->paginate(7);
        $categories = Category::all();

        /*return view('index', compact('contacts', 'categories'));*/
        return view('admin', compact('contacts', 'categories'));
    }


}
