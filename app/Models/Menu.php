<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    //fillable
    protected $fillable = ['name', 'status', 'url', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo($this, 'parent_id');
    }
}
