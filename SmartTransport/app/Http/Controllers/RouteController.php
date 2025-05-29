<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRouteRequest;
use App\Http\Resources\RouteResource;
use App\Models\Route;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::all();

        return response()->json([
            'routes' => RouteResource::collection($routes)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRouteRequest $request)
    {
        $data = $request->validated();

        // Validar que todas las paradas existen
        foreach ($data['scheduled_stops'] as $stopId) {
            if (!Stop::where('_id', $stopId)->exists()) {
                return response()->json([
                    'message' => "Stop with ID $stopId does not exist."
                ], 422);
            }
        }

        $route = Route::create($data);

        return (new RouteResource($route))
            ->response()
            ->setStatusCode(201);
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
        $route = Route::findOrFail($id);
        $route->update($request->all());
        
        return new RouteResource($route);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $route = Route::findOrFail($id);
        $route->delete();
        
        return response()->json(null, 204);
    }
}
