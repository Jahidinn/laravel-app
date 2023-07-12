<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    //    protected $fillable = ['titlr', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                return $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                return $query->where('username', $author);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

// Post::create([
//     'title' => 'Judul Post Ketiga',
//     'slug' => 'judul-post-ketiga',
//     'excerpt' => '34 Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nisi quis veniam eligendi excepturi cupiditate dicta ut, unde nemo a obcaecati dolor ratione adipisci totam fuga molestiae pariatur laudantium sjs',
//     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nisi quis veniam eligendi excepturi cupiditate dicta ut, unde nemo a obcaecati dolor ratione adipisci totam fuga molestiae pariatur laudantium consequatur magni officiis mollitia minus iure voluptatem.</p><p> Maiores, impedit? Omnis maxime labore excepturi in tempora dolorem tempore quidem nesciunt, neque earum consequatur a, ducimus sunt, accusamus optio voluptates illum totam quasi eius nisi autem.</p><p> Suscipit quis velit officia quidem veritatis ducimus quisquam, accusamus molestiae aperiam, tenetur accusantium dolores quasi incidunt provident eos libero explicabo molestias voluptate, similique est beatae illo ipsum. Amet quasi iusto odit deleniti, consequuntur natus molestiae consequatur rem molestias dolores necessitatibus iure nemo quos. Dicta laboriosam voluptate illo at ducimus voluptatum neque odit, quaerat deserunt ad aliquid natus placeat labore eaque necessitatibus reiciendis aperiam repellendus pariatur odio! Numquam voluptatem quod nobis quam, accusantium debitis vitae, est quaerat architecto qui culpa molestias nihil fugiat ex illum saepe hic beatae.</p>'
//     ])