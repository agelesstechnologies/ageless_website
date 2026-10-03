<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function showLogin(){ return view('admin.auth.login'); }
    public function login(Request $request){
        $request->validate(['email'=>'required|email','password'=>'required']);
        if ($request->email === env('ADMIN_EMAIL','admin@ageless.test') && $request->password === env('ADMIN_PASSWORD','admin123')) {
            session(['admin_logged_in'=>true]); return redirect()->route('admin.blogs.index');
        }
        return back()->withErrors(['email'=>'Invalid admin login details.']);
    }
    public function logout(){ session()->forget('admin_logged_in'); return redirect()->route('admin.login'); }
}
