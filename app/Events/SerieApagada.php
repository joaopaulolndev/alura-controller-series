<?php

namespace App\Events;

use App\Serie;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SerieApagada
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $serie;

    /**
     * Create a new event instance.
     *
     * @param object $serie
     */
    public function __construct(object $serie)
    {
        $this->serie = $serie;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
