<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DewormingReturn implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $deworming;

    /**
     * Create a new event instance.
     */
    public function __construct($deworming)
    {
        $this->deworming = $deworming;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new Channel('admin-channel');
    }

    public function broadcastWith(): array
    {
        return ['id' => $this->deworming->id, 'pet' => $this->deworming->pet->name,  'date' => $this->deworming->return];
    }

    public function broadcastAs()
    {
        return 'deworming-event';
    }
  
}
