<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;

    protected $table  = 'priories_banner';

    public function banner()
    {
        return $this->hasOne(Banner::class, 'priority_id');
    }
}
