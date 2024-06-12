<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbBranch extends Model
{
    use HasFactory;
    protected $table = 'tb_branches';
    protected $fillable = ['id','fullname','phone','price_id','detail'];

    public function positionname()
    {
        return $this->belongsTo('App\Models\TbPosition', 'position_id ', 'id');
    }
}
