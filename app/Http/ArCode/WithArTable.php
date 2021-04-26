<?php

namespace App\Http\ArCode;

trait WithArTable
{
    // Query
    public $search,
        $order_field = "DESC",
        $per_page_list = [10, 20, 30, 50],
        $item_per_page = 10;

    public function getQueryString()
    {
        return array_merge(['search', 'order_field', 'item_per_page', 'page'], $this->queryString);
    }

    public function updatedItemPerPage()
    {
        $this->page = 1;
    }
}
