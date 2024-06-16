<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbPrice extends Model
{
    use HasFactory;
    protected $table = 'tb_prices';
    protected $fillable = ['id','product_id','price'];

    public function productname(): BelongsTo
    {
        return $this->belongsTo(TbProduct::class, 'product_id', 'id');
    }
}
