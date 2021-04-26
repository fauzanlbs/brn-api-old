<?php

namespace App\Exports;

use App\Models\Customer as ModelsCustomer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustumersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelsCustomer::select('id', 'name', 'address', 'phone_number', 'phone_status', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'nama',
            'alamat',
            'phone_number',
            'sudah di tf pulsa?',
            'dibuat pada',
        ];
    }
}
