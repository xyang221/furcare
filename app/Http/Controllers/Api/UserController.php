<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return UserResource::collection( 
            User::query()->orderBy('id','desc')->paginate(10)
        );
        
        // return UserResource::collection( 
        //     User::withTrashed()->get()
        // );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated(); //get the data
        $data['password'] = bcrypt($data['password']); //encypt the password
        $user = User::create($data); //create user
        // return response(new UserResource($user), 201);
        return new UserResource($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user,$id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    public function archive($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return new UserResource($user);
     
    }

    
    public function archivelist()
    {
        return UserResource::collection( 
            User::onlyTrashed()->orderBy('id','desc')->get()
        );

    }

    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();
        return response("User restored successfully");
    }
  

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user,$id)
    {
        $user = User::findOrFail($id);
        $data = $request->validated();
        //check
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        $user->update($data);

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->forceDelete();

        return response("Permanently Deleted", Response::HTTP_OK);
        // return response()->json(null, 204);
    }


}
