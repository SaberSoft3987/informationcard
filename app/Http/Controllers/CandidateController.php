<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\wilaya;
use App\Models\commune;

class CandidateController extends Controller
{
     public function showRegistrationinfoForm(Request $request)
    {
 $wilayas = wilaya::all();
 $communes = commune::all();
 $communes39 = commune::where('id_wilaya',  '39')->get();





        return view('info-etat-civil', compact('wilayas', 'communes', 'communes39'));

    }
    public function getCommunes($wilayaId)
{
    $communes = Commune::where('id_wilaya', $wilayaId)->get();
    return response()->json($communes);
}
}
