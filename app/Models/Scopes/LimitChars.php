<?php

namespace App\Models\Scopes;

use Illuminate\Support\Facades\DB;

trait LimitChars
{
    /**
     * Limiting returned characters from field
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param string $field
     * @param int $length
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopelimitChars($query, $field, int $length, string $alias = null)
    {
        if (!$alias) {
            $alias = $field;
        }
        return $query->select('*', DB::raw("LEFT({$field}, {$length}) as {$alias}"));
    }
}
