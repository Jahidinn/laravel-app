<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
}
