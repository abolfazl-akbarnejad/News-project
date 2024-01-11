<?php

namespace App\Models\Layout;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerPriority extends Model
{
    use HasFactory;

    protected $table  = 'banner_priories';

    public function banner()
    {
        return $this->hasOne(Banner::class, 'priority_id');
    }
}
