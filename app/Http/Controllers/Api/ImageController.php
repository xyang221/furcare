<?php

namespace App\Http\Controllers\Api;

use App\Models\Pet;
// use App\Models\Image;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Http\Resources\ImageResource;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Pet::query()->orderBy('id', 'desc')->get();

        if ($images->isEmpty()) {
            return response()->json(['message' => 'No images found.'], 404);
        }
        
        return PetResource::collection($images);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        $data = $request->validated();

        if (!$request->hasFile('name')) {
            return response()->json(["message" => "Please select an image"], 400);
        }
    
        $file = $request->file('name');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $name_path = $file->move('images/', $name);

        $data = $request->validated();
        $data['name'] = $name_path;
    
        Image::create($data); 

        return response()->json(['success' => 'Image uploaded successfully']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
