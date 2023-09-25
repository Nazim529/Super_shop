<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [
            'Product_name',
            'Product_desc',
            'Product_price',
            'Product_stock',
    ];
}
