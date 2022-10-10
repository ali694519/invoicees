<?php

namespace App\Exports;

use App\Models\invoices;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvsettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InvoicesExport implements FromCollection,WithCustomCsvsettings,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function getCsvSettings():array
    {
        return [
            'delimiter'=>','
        ];
    }
    public function headings():array
    {
        return [
    'invoice_number', 'invoice_Date', 'Due_date', 'product', 'Amount_collection','Amount_Commission', 'rate_vAT', 'value_vAT','Total', 'status', 'Payment_Date','note'
        ];
    }

    public function collection()
    {
        // return invoices::all();
         return invoices::select('invoice_number', 'invoice_Date', 'Due_date', 'product', 'Amount_collection','Amount_Commission', 'rate_vAT', 'value_vAT','Total', 'status', 'Payment_Date','note')->get();
    }
}
