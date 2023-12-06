<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller {
    public function index() {
        $array = [
            [
                'name' => 'ThirumalaiVasan',
                'email' => 'thirumalaiv720@gmail.com'
            ],
            [
                'name' => 'Sakthi Ganapathi',
                'email' => 'sakthiganapathis97@gmail.com'
            ],
            [
                'name' => 'Kanish',
                'email' => 'kanish@gmail.com'
            ],
            [
                'name' => 'Raghul',
                'email' => 'raghul@gmail.com'
            ],
            [
                'name' => 'Vishwa',
                'email' => 'vishwa@gmail.com'
            ],
            [
                'name' => 'Peter',
                'email' => 'peter@gmail.com'
            ],
            [
                'name' => 'Dona Mercy',
                'email' => 'donamercy@gmail.com'
            ],
        ];
        return response()->json([
            'message' => "7 users found",
            'data' => $array,
            'status' => 'true'
        ], 200);
    }
}
