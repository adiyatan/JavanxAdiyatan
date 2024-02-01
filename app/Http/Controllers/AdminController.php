<?php

namespace App\Http\Controllers;

use App\Models\CardDetail;
use App\Models\Thanksgiving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $thanksgivings = Thanksgiving::all();
        return view('admin.index', compact('thanksgivings'));
    }

    public function edit($idDetail)
    {
        $thanksgiving = Thanksgiving::where('idDetail', $idDetail)->first();
        $cardDetail = CardDetail::where('idThanksGiving', $idDetail)->first();

        if(!$cardDetail){
            $cardDetail = new CardDetail();
            $cardDetail->name = $thanksgiving->name;
            $cardDetail->description = '';
            $cardDetail->idThanksGiving = $idDetail;
            $cardDetail->isMentor = 0;
            $cardDetail->isLeader = 0;
            $cardDetail->isTeam = 0;
            $cardDetail->isArchived = 0;
            $cardDetail->image = 'programer.png';
            $cardDetail->save();
        }

        return view('admin.edit', compact('cardDetail'));
    }

    public function update(Request $request, $idDetail)
    {
        $request->validate([
            'description' => 'required|string',
            'isMentor' => 'boolean',
            'isLeader' => 'boolean',
            'isTeam' => 'boolean',
            'isArchived' => 'boolean',
            'image' => 'required|in:programer.png,analis.png,po.png,pm.png,pg.png,dev.png,ceo.png,gf.png',
            'textPembukaan' => 'nullable|string',
            'textKesan' => 'nullable|string',
            'textThank' => 'nullable|string',
            'textPenutup' => 'nullable|string',
            'filePenghargaan' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $cardDetail = CardDetail::where('idThanksGiving', $idDetail)->first();
        $thanksgiving = Thanksgiving::where('idDetail', $idDetail)->first();

        if (!$cardDetail) {
            $cardDetail = new CardDetail();
            $cardDetail->idThanksGiving = $idDetail;
        }

        $cardDetail->name = $thanksgiving->name;
        $cardDetail->description = $request->input('description');
        $cardDetail->isMentor = $request->has('isMentor');
        $cardDetail->isLeader = $request->has('isLeader');
        $cardDetail->isTeam = $request->has('isTeam');
        $cardDetail->image = $request->input('image');
        $cardDetail->textPembukaan = $request->input('textPembukaan');
        $cardDetail->textKesan = $request->input('textKesan');
        $cardDetail->textThank = $request->input('textThank');
        $cardDetail->textPenutup = $request->input('textPenutup');
        $cardDetail->isArchived = $request->has('isArchived');

        if ($request->hasFile('filePenghargaan')) {
            // Check if the "sertifikat" folder exists, create it if not
            $sertifikatDirectory = 'sertifikat';
            if (!Storage::exists($sertifikatDirectory)) {
                Storage::makeDirectory($sertifikatDirectory);
            }

            $file = $request->file('filePenghargaan');

            $fileName = uniqid() . '_' . $file->getClientOriginalName();

            $file->move($sertifikatDirectory, $fileName);

            $cardDetail->filePenghargaan = $fileName;
            $cardDetail->save();
        }


        $cardDetail->save();

        return redirect()->route('admin.index')->with('success', 'cardDetail updated successfully');
    }
}
