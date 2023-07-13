<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'postsCount' => Post::count(),
            'userCount' => User::count(),
            'categoriesCount' => Category::count()
        ]);
    }
    public function verify()
    {
        if (Auth()->user()->email_verified_at) {
            return redirect('/dashboard');
        }
        return view('dashboard.verify');
    }
}
