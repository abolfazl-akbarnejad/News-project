<?php

namespace App\Models\Content;

use Cviebrock\EloquentSluggable\sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, sluggable;

    protected $guarded = ['id'];



    public function post_file()
    {
        return $this->hasOne(PostFile::class, 'post_id');
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
