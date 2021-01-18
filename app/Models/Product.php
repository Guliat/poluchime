<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    static public function photo($product_id)
    {
        return DB::table('photos')->where('product_id', '=', $product_id)->where('order', 1)->first();
    }
}
