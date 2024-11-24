<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Integrations\EasyBroker;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of properties.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $easyBroker = new EasyBroker('staging', 'l7u502p8v46ba3ppgvj5y2aad50lb9');
        $properties = $easyBroker->getProperties();

        $response =  [
            'message' => 'Message',
            'data' => $properties,
        ];

        return response()->json($response, 200);
    }

}
