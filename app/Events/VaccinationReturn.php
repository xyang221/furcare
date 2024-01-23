<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VaccinationReturn implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $vaccination;
    /**
     * Create a new event instance.
     */
    public function __construct($vaccination)
    {
        $this->vaccination = $vaccination;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    // public function broadcastOn(): array
    public function broadcastOn()
    {
        return new Channel('admin-channel');
    }

    public function broadcastWith(): array
    {
        return ['id' => $this->vaccination->id, 'date' => $this->vaccination->return, 'pet' => $this->vaccination->pet->name];
    }

    public function broadcastAs()
    {
        return 'vaccination-event';
    }
}
