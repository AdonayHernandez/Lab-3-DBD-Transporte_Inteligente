<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransportCardRequest;
use App\Http\Resources\TransportCardResource;
use App\Models\TransportCard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransportCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = TransportCardResource::collection(TransportCard::all());

        return response()->json([
            'transport_cards' => $cards
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransportCardRequest $request)
    {
        $data = $request->validated();

        // Validar unicidad manualmente con MongoDB
        if (TransportCard::where('card_code', $data['card_code'])->exists()) {
            return response()->json([
                'message' => 'el numero de tarjeta ya existe'
            ], 422);
        }

        $card = TransportCard::create($data);

        return (new TransportCardResource($card))
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $card = TransportCard::findOrFail($id);
        $card->delete();
        
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
