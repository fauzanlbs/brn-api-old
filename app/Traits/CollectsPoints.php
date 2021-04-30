<?php

namespace App\Traits;

use App\Actions\ActionAbstract;
use App\Events\PointsGiven;
use App\Exceptions\PointModelMissingException;
use App\Formatters\PointsFormatter;
use App\Models\Point;

trait CollectsPoints
{
    /**
     * The "booting" method of the trait.
     *
     * @return void
     *
     */
    public static function bootCollectsPoints()
    {
        //
    }

    /**
     * Get the sum of user's points.
     *
     * @return mixed
     */
    public function points()
    {
        return new PointsFormatter(
            $this->pointsRelation->sum('points')
        );
    }

    /**
     * Add given point to user.
     *
     * @param \Miracuthbert\Royalty\Actions\ActionAbstract $action
     * @return void
     * @throws PointModelMissingException
     */
    public function givePoints(ActionAbstract $action)
    {
        if (!$model = $action->getModel()) {
            throw new PointModelMissingException(
                __('Points model for key [:key] not found.', ['key' => $action->key()])
            );
        }

        $this->pointsRelation()->attach($model);

        event(new PointsGiven($this, $model));
    }

    /**
     * Get the user's points.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pointsRelation()
    {
        return $this->belongsToMany(Point::class)
            ->withPivot('created_at')
            ->latest('pivot_created_at');
    }
}
