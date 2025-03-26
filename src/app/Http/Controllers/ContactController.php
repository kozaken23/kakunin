<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('index',compact('categories'));
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['first-name', 'last-name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'bldg', 'category_id', 'detail']);

        $contact['name'] = $contact['first-name'] . ' ' . $contact['last-name'];
        unset($contact['first-name'], $contact['last-name']);

        $contact['tel'] = $contact['tel1'] . $contact['tel2'] . $contact['tel3'];

        unset($contact['tel1'], $contact['tel2'], $contact['tel3']);

        $categories = Category::all()->pluck('content', 'id');

        return view('confirm', compact('contact', 'categories'));
    }


    public function store(Request $request){
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'bldg', 'category_id', 'detail']);
        Contact::create($contact);

        return view('thanks');
    }
}
