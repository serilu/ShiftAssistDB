<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afdelingen;
use App\Models\User;
use Illuminate\Http\Validator;

class AfdelingenController extends Controller
{


    public function store(Request $request) {
        
        $afdelingen = Afdelingen::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }
}
