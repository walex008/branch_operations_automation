<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\HeadOfficeResource;
use App\Models\HeadOffice;
use App\Http\Requests\StoreHeadOfficeRequest;
use App\Http\Requests\UpdateHeadOfficeRequest;

class HeadOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return HeadOfficeResource::collection(HeadOffice::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeadOfficeRequest $request)
    {
        return HeadOffice::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(HeadOffice $headOffice)
    {
        return $headOffice;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeadOfficeRequest $request, HeadOffice $headOffice)
    {
        return $headOffice->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeadOffice $headOffice)
    {
        $headOffice->delete();
        return response('', 204);
    }
}
