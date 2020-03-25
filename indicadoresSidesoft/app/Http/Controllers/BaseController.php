<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class BaseController extends Controller
{
    /* RESPUESTAS 200 o 404 **/
    public function sendResponse($result, $message)
    {
        $response = [
            'status' => 1,
            'data'    => $result
        ];

        return response()->json($response, 200);
    }
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'status' => 0,
            'mensaje' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}