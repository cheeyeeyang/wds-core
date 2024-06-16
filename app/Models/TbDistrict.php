<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbDistrict extends Model
{
    use HasFactory;
    protected $table = 'tb_districts';
    protected $fillable = ['id','district_name','province_id'];
    
    public function province(): BelongsTo
    {
        return $this->belongsTo(TbProvince::class, 'province_id', 'id');
    }
}
