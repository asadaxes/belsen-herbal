<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use App\Models\Products;


class AdminController extends Controller
{
    public function dashboard()
    {
        $total_users = User::count();
        $total_products = Products::all();
        $data = [
            'active_page' => 'dashboard',
            'total_users' => $total_users,
            'total_products' => $total_products,
        ];
        return view('admin.dashboard', $data);
    }

    public function users()
    {
        $users = User::all();
        $data = [
            'active_page' => 'users',
            'users' => $users
        ];
        return view('admin.users', $data);
    }

    public function user_add(Request $request)
    {
        $data = [
            'active_page' => 'users'
        ];
        return view('admin.user_add', $data);
    }


    public function user_add_handler(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5'
        ], [
            'full_name.required' => 'full name is required',
            'email.required' => 'email is required',
            'email.unique' => 'the email has already been taken',
            'password.required' => 'password is required',
            'password.min' => 'The password must be at least 5 characters.'
        ]);

        $user = new User();
        $user->full_name = $validatedData['full_name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->route('users')->with('success', 'User added successfully!');
    }

    public function user_edit()
    {
        try {
            $uid = request()->query('uid');
            $user = User::findOrFail($uid);
            $data = [
                'active_page' => 'users',
                'user' => $user
            ];
            return view('admin.user_edit', $data);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users');
        }
    }

    public function user_edit_handler(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:5',
            'uid' => 'required|exists:users,id'
        ]);

        $user = User::findOrFail($validatedData['uid']);

        if ($validatedData['email'] !== $user->email) {
            $existingUser = User::where('email', $validatedData['email'])->first();
            if ($existingUser && $existingUser->id !== $user->id) {
                return redirect()->back()->withInput()->withErrors(['email' => 'The email address is already in use.']);
            }
        }
        
        $user->full_name = $validatedData['full_name'];
        $user->email = $validatedData['email'];

        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();
        return redirect()->back()->with('success', 'User information updated successfully!');
    }

    public function user_delete(Request $request)
    {
        $validatedData = $request->validate([
            'uid' => 'required|exists:users,id'
        ]);
        $user = User::findOrFail($validatedData['uid']);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully!');
    }

    public function category_list()
    {
        $categories = Category::all();
        $data = [
            'active_page' => 'category',
            'categories' => $categories
        ];
        return view('admin.category', $data);
    }

    public function category_add(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ], [
            'name.required' => 'category name is required',
            'name.max' => 'you have reached the maximum length',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Category created successfully');
    }

    public function category_edit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'id' => 'required'
        ], [
            'name.required' => 'category name is required',
            'name.max' => 'you have reached the maximum length',
            'id.required' => 'Category ID is required'
        ]);

        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Category update successfully');
    }

    public function category_delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ], [
            'id.required' => 'Category ID is required'
        ]);
        $category = Category::findOrFail($request->id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    public function products()
    {
        $products = Products::all();
        $data = [
            'active_page' => 'products',
            'products' => $products
        ];
        return view('admin.products', $data);
    }

    public function product_add()
    {
        $categories = Category::all();
        $data = [
            'active_page' => 'products',
            'categories' => $categories
        ];
        return view('admin.product_add', $data);
    }


    public function product_add_handler(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'required|max:2048',
            'category_id' => 'required|exists:categories,id'
        ], [
            'name.required' => 'The name field is required.',
            'thumbnail.required' => 'The thumbnail must be an image file.',
            'thumbnail.max' => 'The thumbnail may not be greater than 2 MB in size.',
            'category_id.required' => 'Please select a category',
            'category_id.exists' => 'The selected category does not exist'
        ]);

        $product = new Products();
        $product->name = $validatedData['name'];
        $product->category_id = $validatedData['category_id'];
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $product->thumbnail = $thumbnail->store('products', 'public');
        }
        $product->save();

        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    public function product_edit()
    {
        try {
            $pid = request()->query('pid');
            $categories = Category::all();
            $product = Products::findOrFail($pid);
            $data = [
                'active_page' => 'products',
                'categories' => $categories,
                'product' => $product
            ];
            return view('admin.product_edit', $data);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('products');
        }
    }

    public function product_edit_handler(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'max:2048',
            'category_id' => 'required|exists:categories,id',
            'pid' => 'required|exists:products,id'
        ], [
            'name.required' => 'The name field is required.',
            'thumbnail.image' => 'The thumbnail must be an image file.',
            'thumbnail.max' => 'The thumbnail may not be greater than 2 MB in size.',
            'category_id.required' => 'Please select a category',
            'category_id.exists' => 'The selected category does not exist'
        ]);

        $product = Products::findOrFail($validatedData['pid']);

        $product->name = $validatedData['name'];
        $product->category_id = $validatedData['category_id'];
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            if ($product->thumbnail) {
                Storage::disk('public')->delete($product->thumbnail);
            }
            $product->thumbnail = $thumbnail->store('products', 'public');
        }

        $product->save();
        return redirect()->back()->with('success', 'Product information updated successfully!');
    }

    public function product_delete(Request $request)
    {
        $validatedData = $request->validate([
            'pid' => 'required|exists:products,id'
        ]);
        $product = Products::findOrFail($validatedData['pid']);
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}