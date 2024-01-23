<?php

namespace App\Http\Controllers\Api;

use App\Models\Notification;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use App\Http\Resources\NotificationResource;
use App\Models\User;
use Carbon\Carbon;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getNotifs($id)
    {
        $user = User::findOrFail($id);

        $notifications = Notification::where('user_id', $user->id)
            ->whereDate('date', '<=', Carbon::today())
            ->orderBy('date', 'desc') // Adjust the column and direction as needed
            ->paginate(100);

        if ($notifications->isEmpty()) {
            return response()->json(['message' => 'No notifications found.'], 404);
        }

        return NotificationResource::collection($notifications);
    }


    public function countNotifs($id)
    {
        $user = User::findOrFail($id);
        $count = Notification::where('user_id', $user->id)->where('status', 1)->whereDate('date', '<=', Carbon::today())->count();

        return response()->json(['count' => $count]);
    }

    public function updateNotifs($id)
    {
        $user = User::findOrFail($id);
        Notification::where('user_id', $user->id)->where('status', 1)->whereDate('date', '<=', Carbon::today())->update([
            'status' => 0
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
