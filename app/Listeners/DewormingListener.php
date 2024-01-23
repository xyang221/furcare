<?php

namespace App\Listeners;

use App\Events\DewormingReturn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class DewormingListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(DewormingReturn $event)
    {
        $deworming = $event->deworming;
        Log::info("Deworming Event Handled: " . json_encode($deworming));
    }
}
