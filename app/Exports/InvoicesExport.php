<?php

namespace App\Exports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
    public $from;
    public $to;
    
    
    public function __construct($from, $to)
    {
        $this->from = $from;

        $this->to = $to;
    }
    
    public function collection()
    {
        return Record::where('created_at', '>=', $this->from)->where('created_at', '<=', $this->to)->get();
    }
}
