<?php

namespace App\Listeners;

use App\Events\AppointmentEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class AppointmentListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(AppointmentEvent $event)
    {
        $appointment = $event->appointment;
        Log::info("Appointment Event Handled: " . json_encode($appointment));
    }
}
