<?php

namespace App\Exports;

use App\Models\CustomerContact as ModelsCustomerContact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustumerContactsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelsCustomerContact::select(
            'id',
            'customer_id',
            'display_name',
            'given_name',
            'middle_name',
            'prefix',
            'suffix',
            'family_name',
            'company',
            'job_title',
            'emails',
            'phones',
            'postal_addresses',
            'birthday',
            'android_account_type',
            'android_account_name',
        )->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'customer_id',
            'display_name',
            'given_name',
            'middle_name',
            'prefix',
            'suffix',
            'family_name',
            'company',
            'job_title',
            'emails',
            'phones',
            'postal_addresses',
            'birthday',
            'android_account_type',
            'android_account_name',
        ];
    }
}
