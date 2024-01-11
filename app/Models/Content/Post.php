<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_mini'
            ]
        ];
    }

}
