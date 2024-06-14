<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbUserWaterline extends Model
{
    use HasFactory;
    protected $fillable = ['id','employee_id','waterline_id'];
    public function tbemployeename()
    {
        return $this->belongsTo('App\Models\TbEmployee', 'employee_id', 'id');
    }
    public function tbwaterlinename()
    {
        return $this->belongsTo('App\Models\TbWaterLine', 'waterline_id', 'id');
    }
}
