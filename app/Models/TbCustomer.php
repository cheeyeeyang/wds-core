<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbCustomer extends Model
{
    use HasFactory;
    protected $fillable = ['id','code','customer_name','alley','village_id','h_number','phone','b_amount','price_id','lat','lng','user_waterline_id','remark'];


    public function userwaterlinename(): BelongsTo
    {
        return $this->belongsTo(TbUserWaterline::class, 'user_waterline_id', 'id');
    }

    public function villagename(): BelongsTo
    {
        return $this->belongsTo(TbVillage::class, 'village_id', 'id');
    }
    // public function userwaterlinename()
    // {
    //     return $this->belongsTo('App\Models\TbUserWaterline', 'user_waterline_id ', 'id');
    // }
}
