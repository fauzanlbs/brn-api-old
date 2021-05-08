<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Rinvex\Categories\Models\Category;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kategori
 */
class CategoryController extends Controller
{

    /**
     * Mendapatkan list kategori.
     * Dibagian ini Anda bisa mendapatkan list data kategori.
     *
     * @queryParam search string Mencari data kategori. Example: motivasi
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 2
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -name. Example: name
     *
     * @queryParam filter[name] string Penyortiran berdasarkan nama. Example: motivasi
     * @queryParam filter[slug] string Penyortiran berdasarkan slug. Example: motivasi
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @responseFile storage/responses/category-resource.response.json
     */
    public function getCategories(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'name', 'slug'
        ];

        $categories = QueryBuilder::for(Category::class)
            ->defaultSort('-' . $allowed[0])
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->when($search, function ($q, $search) {
                return $q->where('name', 'like', "%{$search}%");
            })
            ->jsonPaginate();

        return CategoryResource::collection($categories);
    }
}
