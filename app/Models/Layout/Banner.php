<?php

namespace App\Models\Layout;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['file_show', 'date_start', 'date_end', 'url', 'priority_id', 'file_type'];

    public function prioriry()
    {
        return $this->belongsTo(BannerPriority::class, 'priority_id');
    }

    public function invoice()
    {
        return $this->hasOne(BannerInvoice::class, 'banner_id');
    }
}
