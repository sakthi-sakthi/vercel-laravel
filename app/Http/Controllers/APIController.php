<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormData;

class APIController extends Controller {
    public function storeFormData(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $formData = FormData::create($data);

        return response()->json(['message' => 'Data stored successfully', 'data' => $formData], 201);
    }

    public function getFormData() {
        $formData = FormData::all();

        return response()->json($formData, 200);
    }
}
