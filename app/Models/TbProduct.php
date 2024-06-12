<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbProduct extends Model
{
    use HasFactory;
    protected $table = 'tb_products';
    protected $fillable = ['id', 'barcode', 'product_name', 'unit_id', 'price_cost'];

    public function units()
    {
        return $this->belongsTo('App\Models\TbUnit', 'unit_id ', 'id');
    }
}
