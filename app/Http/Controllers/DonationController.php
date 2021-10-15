<?php

namespace App\Http\Controllers;

use App\Http\Resources\DonationResource;
use App\Http\Resources\UserDonationResource;
use App\Models\Donation;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Requests\Donation\DonationRequest;
use App\Repositories\Donation\EloquentDonationRepository;


/**
 * @group Donasi
 */
class DonationController extends Controller
{
    use ResponseAPI;
    protected $eloquentDonation;

    /**
     * @param EloquentDonationRepository $eloquentDonation
     */

    public function __construct(EloquentDonationRepository $eloquentDonation)
    {
        $this->eloquentDonation = $eloquentDonation;
    }
    /**
     * Mendapatkan list data donasi yang tersedia.
     *
     * @queryParam search string Mencari data artikel. Example: Berita hari ini
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[title] string Penyortiran berdasarkan judul. Example: Berita hari ini
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     * @queryParam filter[donated_at] string Penyortiran berdasarkan tanggal akan di donasikan. Example: 2020-12-24
     *
     * @param Request $request
     * @return DonationResource
     *
     * @responseFile storage/responses/donation-resource.response.json
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'title', 'donated_at',
        ];

        $articles = QueryBuilder::for(Donation::class)
            ->limitChars('description', 100)
            ->withCount(['donationUser',])
            ->withSum('donationUser', 'nominal')
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return DonationResource::collection($articles);
    }

    /**
     * Menambahkan user yang berdonasi.
     * Dibagian ini Anda bisa menambahkan user yang ingin donasi.
     * @authenticated
     *
     * @param AgendaRequest $request
     * @return AgendaResource
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function store(DonationRequest $request)
    {
        $userDonation = $this->eloquentDonation->create(NULL, $request);

        return (new UserDonationResource($userDonation))->additional([
            'message' => __('messages.created', ['attr' => 'userDonation']),
        ]);
    }

}
