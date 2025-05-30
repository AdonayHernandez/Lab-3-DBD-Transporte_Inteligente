## por cuestiones de tiempo no pudimos implementar un documentacion funcional automatica pero aqui estarian las rutas

## MODELO USER
api/users ->get y post 
api/user/id ->put y show y delete

## MODELO typeOfVehicle
api/typeOfVehicule ->get y post
api/typeOfVehicule/id put y show y delete

## MODELO Vehicles 
api/vehicles -> get y post
api/vehicles/id ->put y show y delete

## MODELO Driver
api/drivers ->get y post
api/drivers/id ->put y show y delete

## MODELO STOP
api/stops -> get y post
api/stops/id ->put show y delete

## MODELO TransportCard
api/trasnportcards ->get y post
api/trasnportcards/id ->put show y delete

## MODELO Route
api/routes ->get y post
api/routes/id ->put show y delete
{
            "id": "6837ea5e607163e2a20b79b5",
            "route_name": "Ruta 322",
            "scheduled_stops": [
                "6837e2d8607163e2a20b79b2",
                "6837e95f607163e2a20b79b4"
            ],
            "schedules": [
                "06:00",
                "08:00",
                "10:00"
            ],
            "time_between_stations": {
                "6837e2d8607163e2a20b79b2-6837e95f607163e2a20b79b4": 15
            },
            "fare_per_segment": [
                1.5,
                3
            ],
            "accessibility": false,
            "created_at": "2025-05-29T05:02:22.121000Z"
        }

## MODELO Trip 
api/trips  ->get y post
api/trips/id ->put show y delete

## MODELO Maintenances
api/maintenances ->get y post
api/maintenances ->put show y delete
