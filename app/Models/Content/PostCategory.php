<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\sluggable;

class PostCategory extends Model
{
    use HasFactory, sluggable;

    protected $fillable = ['name', 'image', 'status'];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }



    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
