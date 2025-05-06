<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function showlogin(){

        return view('books.form');
    }


    public function login(Request $request) {
        $admin = Admin::where('email', $request->email)->first();
    
        if ($admin && \Hash::check($request->password, $admin->password)) {
            session(['is_admin_logged_in' => true]);
            return redirect()->route('books.admin'); // Redirect to admin dashboard
        }
    
        return back()->with('error', 'Invalid credentials');
    }
    
}
