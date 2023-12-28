<?php

namespace App\Http\Controllers\Api;

use App\Models\MedicineCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\MedicineCategoryResource;

class MedicineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicineCat = MedicineCategory::get();

        return MedicineCategoryResource::collection($medicineCat);
    }
}
