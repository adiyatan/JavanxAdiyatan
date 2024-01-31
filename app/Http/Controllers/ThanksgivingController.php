<?php

namespace App\Http\Controllers;

use App\Models\thanksgiving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThanksgivingController extends Controller
{
    public function index()
    {
        return view('thanksgiving.index');
    }

    public function getRecommendations(Request $request)
    {
        $searchInput = $request->input('searchInput');

        $recommendations = Thanksgiving::where('name', 'like', '%' . $searchInput . '%')->get();

        return response()->json($recommendations);
    }


    public function showDetail($encryptedId)
    {
        $recommendationId = base64_decode($encryptedId);

        // Add debugging statements
        dd($encryptedId, $recommendationId);

        $recommendation = Thanksgiving::find($recommendationId);

        if (!$recommendation) {
            abort(404);
        }

        return view('thanksgiving.detail', compact('recommendation'));
    }
}
