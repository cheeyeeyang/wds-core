<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbExpense extends Model
{
    use HasFactory;
    protected $table = 'tb_expenses';
    protected $fillable = ['id','bill_name','qty','unit_id','amount','user_id'];

    public function unitname(): BelongsTo
    {
        return $this->belongsTo(TbUnit::class, 'unit_id', 'id');
    }

    public function username(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
