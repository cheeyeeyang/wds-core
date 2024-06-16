<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TbUnit;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class TbProduct extends Model
{
    use HasFactory;
    protected $table = 'tb_products';
    protected $fillable = ['id', 'barcode', 'product_name', 'unit_id', 'price_cost'];
    
    public function units(): BelongsTo
    {
        return $this->belongsTo(TbUnit::class, 'unit_id', 'id');
    }
}
