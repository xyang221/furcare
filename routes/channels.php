<?php

use App\Events\AppointmentEvent;
use App\Models\Appointment as ModelsAppointment;
use App\Models\PetOwner;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use App\Models\Appointment;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::routes(['middleware' => ['cors', 'auth:sanctum']]);
Broadcast::channel('admin-channel.{id}', function ($user, $id) {
    $appointment = ModelsAppointment::find($id); // Fixed typo in $appointment variable
    return (int) $user->id === (int) $appointment->petowner->user->id; // Assuming user_id is the field you want to compare
});

Broadcast::channel('petowner-channel', function ($user) {
    return Auth::check();
});
