<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbEmployee extends Model
{
    use HasFactory;
    protected $table = 'tb_employees';
    protected $fillable = ['id', 'fullname', 'phone', 'position_id'];

    public function position(): BelongsTo
    {
        return $this->belongsTo(TbPosition::class, 'position_id', 'id');
    }
}
