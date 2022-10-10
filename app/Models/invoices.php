<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoices extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'Due_date',
        'product',
        'section_id',
        'Amount_collection',
        'Amount_commission',
        'Discount',
        'value_vat',
        'rate_vat',
        'total',
        'status',
        'value_status',
        'Payment_Date',
        'note',
        'Payment_Date',
        'user',
    ];

    protected $dates = ['deleted_at'];  //ممكن نستغنى عنها

    public function SECT()
    {
        return $this->belongsTo('App\Models\sections','section_id');
    }


}
