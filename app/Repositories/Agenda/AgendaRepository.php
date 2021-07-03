<?php

namespace App\Repositories\Agenda;

use App\Http\Requests\Agenda\AgendaRequest;
use App\Models\Agenda;

interface AgendaRepository
{
    /**
     * Create or update Agenda
     *
     * @param int $id
     * @param AgendaRequest $agendaRequest
     *
     * @return Agenda
     */
    public function createOrUpdate(?int $id, AgendaRequest $agendaRequest): Agenda;
}
