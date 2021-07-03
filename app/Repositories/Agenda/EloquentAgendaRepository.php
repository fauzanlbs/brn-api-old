<?php

namespace App\Repositories\Agenda;

use App\Http\Requests\Agenda\AgendaRequest;
use App\Models\Agenda;
use App\Repositories\Agenda\AgendaRepository;
use Illuminate\Support\Facades\DB;

class EloquentAgendaRepository implements AgendaRepository
{
    /**
     * Create or update agenda
     *
     * @param int $id
     * @param AgendaRequest $agendaRequest
     *
     * @return Agenda
     */
    public function  createOrUpdate(?int $id, AgendaRequest $agendaRequest): Agenda
    {
        try {
            // Begin Transaction
            DB::beginTransaction();

            $agendaRequest = $agendaRequest->validated();

            // explode location -> lat.lng
            if ($agendaRequest['location'] ?? false) {
                $latLong  = explode(",", $agendaRequest['location']);
                unset($agendaRequest['location']);
                $agendaRequest['latitude'] = $latLong[0];
                $agendaRequest['longitude'] = $latLong[1];
            }

            // create Or update agenda
            if (isset($id)) {
                $agenda = Agenda::find($id);
                $agenda->update($agendaRequest);
            } else {
                $agenda = Agenda::create($agendaRequest);
            };

            if (isset($agendaRequest['image'])) {
                $agenda->updateImage($agendaRequest['image']);
            }

            DB::commit();
            // End Commit of Transaction

            $agenda->load(['area', 'user']);

            return $agenda;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e);
        }
    }
}
