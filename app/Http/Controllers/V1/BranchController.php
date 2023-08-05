<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\BranchResource;
use App\Models\Branch;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use Illuminate\Support\Facades\Auth;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BranchResource::collection(Branch::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchRequest $request)
    {
        $branch = Branch::create([
           'head_office_id'=>$request->head_office_id,
           'zone_id' => $request->zone_id,
           'area_id' => $request->area_id,
           'name' => $request->name,
           'opening_date' =>$request->opening_date,
           'address' => $request->address,
           'description' => $request->description,
           'is_system' => $request->is_system,
           'status' => $request->status,
//           'created_by' => Auth::id(),
            'created_by' => 1,
        ]);

        return $branch;
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        return $branch;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        return $branch->update([
            'head_office_id'=>$request->head_office_id,
            'zone_id' => $request->zone_id,
            'area_id' => $request->area_id,
            'name' => $request->name,
            'opening_date' =>$request->opening_date,
            'address' => $request->address,
            'description' => $request->description,
            'is_system' => $request->is_system,
            'status' => $request->status,
//           'created_by' => Auth::id(),
            'created_by' => 1,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return response('', 204);
    }
}
