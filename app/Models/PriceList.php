<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'delivery_time',
        'number_of_revisions',
    ];

    public function bundles()
    {
        return $this->hasMany(Bundle::class);
    }
}
