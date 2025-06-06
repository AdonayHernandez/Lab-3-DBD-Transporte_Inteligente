<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Http\Resources\TripResource;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Dedoc\Scramble\Attributes\ExcludeRouteFromDocs;
use Dedoc\Scramble\Attributes\Group;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::with(['user', 'route'])->paginate(4);

        return response()->json([
            'trips' => TripResource::collection($trips)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTripRequest $request)
    {
        $data = $request->validated();

        $trip = Trip::create($data);

        return (new TripResource($trip))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trip = Trip::with(['user', 'route'])->findOrFail($id);

        return response()->json([
            'trip' => new TripResource($trip)
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trip = Trip::findOrFail($id);
        $trip->update($request->all());

        return new TripResource($trip);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trip = Trip::findOrFail($id);
        $trip->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
