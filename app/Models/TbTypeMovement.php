<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbTypeMovement extends Model
{
    use HasFactory;
    protected $table = 'tb_type_movements';
    protected $fillable = ['id','name'];
}
