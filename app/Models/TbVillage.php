<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbVillage extends Model
{
    use HasFactory;
    protected $table = 'tb_villages';
    protected $fillable = ['id', 'village_name', 'district_id',];
    
    public function district(): BelongsTo
    {
        return $this->belongsTo(TbDistrict::class, 'district_id', 'id');
    }
    // public function province(): BelongsTo
    // {
    //     return $this->belongsTo(TbPosition::class, 'position_id', 'id');
    // }

}
