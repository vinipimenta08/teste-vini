<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public static function responseApi($data = [], $message = '', $error = 0): Array
    {
        return [
            'error' => $error,
            'data' => $data,
            'message' => $message
        ];
    }
}
