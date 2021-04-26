<?php

namespace App\Http\Livewire\Customer;

use App\Http\ArCode\WithArTable;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithArTable, WithPagination {
        WithArTable::getQueryString insteadof WithPagination;
    }

    public function render()
    {
        $customers = $this->getDatas();

        return view('livewire.customer.show', [
            'customers' => $customers,
        ]);
    }

    public function getDatas()
    {
        $search = $this->search;
        $datas = Customer::withCount(['myContacts'])
            ->when($search, function ($query, $search) {
                $this->resetPage();
                return $query->search($search);
            })
            ->orderBy('created_at', $this->order_field)
            ->paginate($this->item_per_page);

        return  $datas;
    }

    public function setStatusPhone($id)
    {
        $customer = Customer::find($id);
        $customer->phone_status = true;
        $customer->save();

        $this->dispatchBrowserEvent('show-alert', [
            'type' => 'success',
            'title' => 'Berhasil',
            'description' => 'Customer ' . $customer->name . ' telah ditandai sudah di tf pulsa.'
        ]);
    }
}
