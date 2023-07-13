<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //route key name agar route dengan slug berfungsi tanpa harus menggunakan id
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
