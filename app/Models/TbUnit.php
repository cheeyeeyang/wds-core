<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbUnit extends Model
{
    use HasFactory;
    protected $table = 'tb_units';
    protected $fillable = ['id','name'];
}
