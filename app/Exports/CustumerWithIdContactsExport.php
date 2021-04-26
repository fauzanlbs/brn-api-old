<?php

namespace App\Exports;

use App\Models\CustomerContact as ModelsCustomerContact;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustumerWithIdContactsExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function __construct(int $cid)
    {
        $this->cid = $cid;
    }

    public function query()
    {
        return ModelsCustomerContact::query()->where('customer_id', $this->cid)->select(
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
        );
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
