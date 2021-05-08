<?php

namespace App\Events;

use App\Models\Point;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PointsGiven
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * The User instance.
     *
     * @var $user
     */
    public $user;

    /**
     * The Point instance.
     *
     * @var \Miracuthbert\Royalty\Models\Point
     */
    public $point;

    /**
     * Create a new event instance.
     *
     * @param $user
     * @param \Miracuthbert\Royalty\Models\Point $point
     * @return void
     */
    public function __construct($user, Point $point)
    {
        $this->user = $user;
        $this->point = $point;
    }

    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'points-given';
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'point' => $this->point,
            'user_points' => [
                'number' => $this->user->points()->number(),
                'shorthand' => $this->user->points()->shorthand(),
            ],
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('users.' . $this->user->id);
    }
}
