<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbEmployee extends Model
{
    use HasFactory;
    protected $table = 'tb_employees';
    protected $fillable = ['id', 'fullname', 'phone', 'position_id'];

    public function positionname()
    {
        return $this->belongsTo('App\Models\TbPosition', 'position_id ', 'id');
    }
}
