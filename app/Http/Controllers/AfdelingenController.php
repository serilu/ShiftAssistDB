<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afdelingen;
use App\Models\Pakkettype;
use App\Models\User;
use Illuminate\Http\Validator;

class AfdelingenController extends Controller
{


    public function store(Request $request) {
        
        $afdelingen = Afdelingen::create([
            'name' => $request->name,
        ]);

        $pakkettype = Pakkettype::create([
            'afdeling' => $request->name,
            'pakkettype' => $request->pakketType1,
        ]);

        $pakkettype = Pakkettype::create([
            'afdeling' => $request->name,
            'pakkettype' => $request->pakketType2,
        ]);

        $pakkettype = Pakkettype::create([
            'afdeling' => $request->name,
            'pakkettype' => $request->pakketType3,
        ]);

        $pakkettype = Pakkettype::create([
            'afdeling' => $request->name,
            'pakkettype' => $request->pakketType4,
        ]);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function getAfdeling() {
        $afdelingen = Afdelingen::All();
        $pakkettype = Pakkettype::All();
      

        return response()->json([
            'status' => 200,
            'afdelingen' => $afdelingen,
            'pakkettype' => $pakkettype,
        ]);
    }
    public function getPakkettype(Request $request) {
        $pakkettype = Pakkettype::All()->where("afdeling", $request->afdeling);
      
        return response()->json([
            'status' => 200,
            'pakkettype' => $pakkettype,
        ]);
    }


}
