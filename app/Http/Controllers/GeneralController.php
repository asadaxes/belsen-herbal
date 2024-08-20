<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Products;
use App\Mail\ContactMail;
use App\Models\Category;

class GeneralController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = Products::all();
        $data = [
            'active_page' => 'home',
            'categories' => $categories,
            'products' => $products
        ];
        return view('general.home', $data);
    }

    public function about_us()
    {
        $categories = Category::all();
        $products = Products::all();
        $data = [
            'active_page' => 'about_us',
            'categories' => $categories,
            'products' => $products
        ];
        return view('general.about_us', $data);
    }

    public function mission_vision()
    {
        $categories = Category::all();
        $products = Products::all();
        $data = [
            'active_page' => 'mission_vision',
            'categories' => $categories,
            'products' => $products
        ];
        return view('general.mission_vision', $data);
    }

    public function manufactor()
    {
        $categories = Category::all();
        $products = Products::all();
        $data = [
            'active_page' => 'manufactor',
            'categories' => $categories,
            'products' => $products
        ];
        return view('general.manufactor', $data);
    }

    public function contact_us()
    {
        $categories = Category::all();
        $products = Products::all();
        $data = [
            'active_page' => 'contact_us',
            'categories' => $categories,
            'products' => $products
        ];
        return view('general.contact_us', $data);
    }

    public function contactSubmission(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($request->all()));
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }

    public function login()
    {
        $categories = Category::all();
        $products = Products::all();
        $data = [
            'categories' => $categories,
            'products' => $products
        ];
        return view('general.login', $data);
    }

    public function login_handler(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'email.required' => 'The email field is required.',
            'password.required' => 'The password field is required.',
            'g-recaptcha-response.required' => 'The captcha field is required.',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->only('email'));
    }
}