<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Afdeling;


class AfdelingController extends Controller
{
    public function addAfdeling(Request $request) {
        

        $afdeling = Afdeling::create([
            'id' => 30,
            'naam' => "xdffff",
        ]);


        return response()->json([
            'status' => 200,
            'lol' => $request->naamAfdeling,
        ]);
    }
}
