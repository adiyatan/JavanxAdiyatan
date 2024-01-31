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

        // Lakukan pencarian di tabel recommendations berdasarkan nama
        $recommendations = thanksgiving::where(function ($query) use ($searchInput) {
            $query->where('name', 'like', '%' . $searchInput . '%');
            // Tambahkan logika pencarian lainnya jika diperlukan
        })->get();

        return response()->json($recommendations);
    }
}
