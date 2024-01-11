<?php

namespace App\Models\Layout;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerInvoice extends Model
{
    use HasFactory;

    protected $table = 'banner_invoice';

    protected $fillable = ['compani_name', 'price', 'date_start', 'date_end', 'status', 'status_paid', 'url', 'banner_id'];
}
