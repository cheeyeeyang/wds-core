<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbBranch extends Model
{
    use HasFactory;
    protected $table = 'tb_branches';
    protected $fillable = ['id','fullname','phone','price_id','detail'];

    public function pricename(): BelongsTo
    {
        return $this->belongsTo(TbPrice::class, 'price_id', 'id');
    }
}
