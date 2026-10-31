<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function showLogin(){ return view('admin.auth.login'); }
    public function login(Request $request){
        $request->validate(['email'=>'required|email','password'=>'required']);
        $email = (string) env('ADMIN_EMAIL');
        $password = (string) env('ADMIN_PASSWORD');
        // No built-in fallback credentials: if the env values are unset, nobody can log in.
        if ($email !== '' && $password !== ''
            && hash_equals($email, (string) $request->email)
            && hash_equals($password, (string) $request->password)) {
            $request->session()->regenerate();
            session(['admin_logged_in'=>true]); return redirect()->route('admin.blogs.index');
        }
        return back()->withErrors(['email'=>'Invalid admin login details.']);
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
