<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStopRequest;
use App\Http\Resources\StopResource;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stops = StopResource::collection(Stop::all());

        return response()->json([
            'stops' => $stops
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStopRequest $request)
    {
        $stop = Stop::create($request->validated());

        return (new StopResource($stop))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stop = Stop::findOrFail($id);
        $stop->update($request->all());
        
        return new StopResource($stop);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stop = Stop::findOrFail($id);
        $stop->delete();
        
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
