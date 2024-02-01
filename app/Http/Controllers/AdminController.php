<?php

namespace App\Http\Controllers;

use App\Models\CardDetail;
use App\Models\Thanksgiving;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $thanksgivings = Thanksgiving::all();
        return view('admin.index', compact('thanksgivings'));
    }

    public function edit($idDetail)
    {
        $thanksgiving = Thanksgiving::where('idDetail', $idDetail)->firstOrFail();

        return view('admin.edit', compact('thanksgiving'));
    }

    public function update(Request $request, $idDetail)
    {
        $request->validate([
            'description' => 'required|string',
            // 'isMentor' => 'boolean',
            // 'isLeader' => 'boolean',
            // 'isTeam' => 'boolean',
            'image' => 'required|in:programer.png,analis.png,po.png,pm.png,pg.png,dev.png,ceo.png',
        ]);

        // Find the Thanksgiving model by idDetail
        $thanksgiving = CardDetail::where('idThanksGiving', $idDetail)->first();

        // Check if the model exists, if not, create a new one
        if (!$thanksgiving) {
            $thanksgiving = new CardDetail();
            $thanksgiving->idThanksGiving = $idDetail;
        }

        // Update the model with the new data
        $thanksgiving->description = $request->input('description');
        // $thanksgiving->isMentor = $request->has('isMentor');
        // $thanksgiving->isLeader = $request->has('isLeader');
        // $thanksgiving->isTeam = $request->has('isTeam');
        $thanksgiving->image = $request->input('image');

        // Save the updated model
        $thanksgiving->save();

        // Redirect back to the index page or show a success message
        return redirect()->route('admin.index')->with('success', 'Thanksgiving updated successfully');
    }
}
