<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbSalary extends Model
{
    use HasFactory;
    protected $table = 'tb_salaries';
    protected $fillable = ['id','amount','position_id'];

    public function position(): BelongsTo
    {
        return $this->belongsTo(TbPosition::class, 'position_id', 'id');
    }
}
