<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $user_id = $user->id;
        $role_id = DB::table('model_has_roles')->select('role_id')->where('model_id', $user_id)->first();
        if($role_id->role_id == '1'){
            return redirect('users');
        }
        return view('home');
    }
}
