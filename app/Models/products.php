<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sections;

class products extends Model
{
    use HasFactory;
    // protected $fillable = [

    //     'product_name',
    //     'description',
    //     'section_id',
    // ];

    protected $guarded = [];

    public function SECT()
    {
        return $this->belongsTo('App\Models\sections','section_id');
    }


}
