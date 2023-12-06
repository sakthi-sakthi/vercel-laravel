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

        $formDatas = FormData::create($data);

        return response()->json(['message' => 'Data stored successfully', 'data' => $formDatas], 201);
    }

    public function getFormData() {
        $formDatas = FormData::all();

        return response()->json($formDatas, 200);
    }
}
