<?php

namespace app\Traits;

// Untuk Formatting Response
trait ApiResponseFormatter
{
    public function apiResponse($code = 200, $message = "success", $data = [])
    {
        // Dari Parameter Akan di Format Menjadi Seperti Dibawah Ini
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ]);
    }
}
