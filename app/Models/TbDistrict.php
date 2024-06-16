<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbDistrict extends Model
{
    use HasFactory;
    protected $table = 'tb_districts';
    protected $fillable = ['id','district_name','province_id'];

    public function provincename()
    {
        return $this->belongsTo('App\Models\TbProvince', 'province_id ', 'id');
    }
}
