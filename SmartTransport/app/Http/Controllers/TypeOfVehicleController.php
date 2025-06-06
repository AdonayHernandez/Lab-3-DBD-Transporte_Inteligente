<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTypeOfVehicleRequest;
use App\Http\Requests\UpdateTypeOfVehicleRequest;
use App\Http\Resources\TypeOfVehicleResource;
use App\Models\TypeOfVehicle;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Dedoc\Scramble\Attributes\ExcludeRouteFromDocs;
use Dedoc\Scramble\Attributes\Group;

class TypeOfVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeOfVehicle = TypeOfVehicleResource::collection(TypeOfVehicle::all());

        return response()->json([
            'typeOfVehicle' => $typeOfVehicle
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeOfVehicleRequest $request)
    {
        $typeOfVehicle = TypeOfVehicle::query()->create($request->validated());

        return (new TypeOfVehicleResource($typeOfVehicle))->response()->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeOfVehicle $typeOfVehicle)
    {
        return response()->json([
            'typeOfVehicle' => new TypeOfVehicleResource($typeOfVehicle)
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeOfVehicleRequest $request, $id)
    {
        $typeOfVehicle = TypeOfVehicle::find($id);

        if (!$typeOfVehicle) {
            return response()->json([
                'message' => 'Tipo de vehículo no encontrado'
            ], Response::HTTP_NOT_FOUND);
        }

        $data = $request->validated();
        $typeOfVehicle->update($data);

        return (new TypeOfVehicleResource($typeOfVehicle))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeOfVehicle $typeOfVehicle)
    {
        $typeOfVehicle->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
