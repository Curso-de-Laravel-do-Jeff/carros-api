<?php

namespace App\Core\Support;

use Illuminate\Http\Response;

trait Error
{
    public function renderError(\Exception $e, string $message = '')
    {
        return response()->json([
            'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            'error' => $e,
            'message' => $message
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
