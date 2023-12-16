<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\Address;
use App\Models\PetOwner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function signup(SignupRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'role_id' => 3,
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        $address = Address::create([
            'zipcode_id' => $data['zipcode_id'],
            'barangay' => $data['barangay'],
            'zone' => $data['zone'],
        ]);

        $petOwner = PetOwner::create([
            'user_id' => $user->id,
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'contact_num' => $data['contact_num'],
            'address_id' => $address->id,

        ]);


        $token = $user->createToken('main')->plainTextToken;

        return response(compact('petowner', 'user', 'token'));
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return response([
                'message' => 'Incorrect Email or Password!'
            ], 422);
        }

        /** @var User $user */
        $user = Auth::user();


        if ($user->trashed()) {
            Auth::logout();
            return response([
                'message' => 'Your account has been deactivated.'
            ], 422);
        }

        $token = $user->createToken('main')->plainTextToken;

        if ($user->role_id === 3) {
            $petowner = $user->petOwner;
            return response(compact('petowner', 'user', 'token'));
        } else if ($user->role_id === 2) {
            $staff = $user->staff;
            return response(compact('staff', 'user', 'token'));
        } else {
            return response(compact('user', 'token'));
        }
    }

    public function logout(Request $request)
    {
        /** @var User $user */
        $user = $request->user();
        $user->currentAccessToken()->delete;
        return response('', 204);
    }
}
