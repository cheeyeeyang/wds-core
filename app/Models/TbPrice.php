<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbPrice extends Model
{
    use HasFactory;
    protected $table = 'tb_prices';
    protected $fillable = ['id','product_id','price'];

    public function pricename()
    {
        return $this->belongsTo('App\Models\TbProduct', 'product_id ', 'id');
    }
}
