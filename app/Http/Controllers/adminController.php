<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class adminController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('admin.overview',['name' => $user->name,'email' => $user->email]);
    }
}
