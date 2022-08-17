<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIBaseController extends Controller 
{
    // แสดงข้อมูลเมื่อ สำเร็จ
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message
        ];

        // เอา response แปลงเป็น json
        return response()->json($response, 200);
    }

    // แสดงข้อมูลเมื่อ ผิดพลาด
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error
        ];

        if(!empty($errorMessages)){
            $response['data'] =  $errorMessages;
        }

        return response()->json($response, $code);
    }
}