<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Log;
use App\Models\User;

class NewUser implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
        * The user that created the server.
        *
        * @var \App\Models\User
    */
    public $user;

    /**
        * Create a new event instance.
        *
        * @param  \App\Models\User  $user
        * @return void
    */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
        * Get the channels the event should broadcast on.
        *
        * @return Channel|array
    */
    public function broadcastOn()
    {
        return new Channel('new-user');
    }
}
