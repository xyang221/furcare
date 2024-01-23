<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class AppointmentEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $appointment;
    // public $id;

    public function __construct($appointment)
    {
        $this->appointment = $appointment;
        // $this->id = $id;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('admin-channel.'.$this->appointment->petowner->user->id);
        // return ['admin-channel'];
        // return new Channel('admin-channel');
        // return new PrivateChannel('admin-channel.'.$this->appointment);
    }

    public function broadcastWith(): array
    {
        return ['id' => $this->appointment->id, 'firstname' => $this->appointment->petowner->firstname, 'lastname' => $this->appointment->petowner->lastname,   'date' => $this->appointment->date, 'status' => $this->appointment->status];
    }

    public function broadcastAs()
    {
        return 'appointment-event';
    }
}
