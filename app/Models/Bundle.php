<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'active',
        'price_list_id',
    ];

    public function priceList()
    {
        return $this->belongsTo(PriceList::class);
    }
}
