<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Core\Support\Error;
use App\Services\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{
    use Error;

    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function index(Request $request)
    {
        try {
            $params = $request->all();

            $cars = $this->car->index($params);

            return response()->json([
                'code' => Response::HTTP_OK,
                'data' => $cars
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
           $this->renderError($e);
        }
    }

    public function store(Request $request)
    {
        try {
            $params = $this->toValidate($request);

            $car = $this->car->store($params);

            return response()->json([
                'code' => Response::HTTP_CREATED,
                'data' => $car
            ], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            $this->renderError($e);
        }
    }

    public function show($id)
    {
        try {
            $car = $this->car->show($id);

            return response()->json([
                'code' => Response::HTTP_OK,
                'data' => $car
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            $this->renderError($e);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $params = $request->all();

            $this->car->update($params, $id);

            $car = $this->car->show($id);


            return response()->json([
                'code' => Response::HTTP_ACCEPTED,
                'data' => $car
            ], Response::HTTP_ACCEPTED);
        } catch (\Exception $e) {
            $this->renderError($e);
        }
    }

    public function delete($id)
    {
        try {
            $this->car->delete($id);

            return response()->json([
                'code' => Response::HTTP_OK,
                'data' => $id
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            $this->renderError($e);
        }
    }

    public function toValidate($request)
    {
        return $this->validate($request, [
            'brand' => 'required|max:50',
            'model' => 'required|max:75',
            'year' => 'required',
            'color' => 'required|max:20',
            'value' => 'nullable|numeric'
        ]);
    }
}
