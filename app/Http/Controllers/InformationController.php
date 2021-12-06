<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Requests\Information\UpdateInformationRequest;

class InformationController extends Controller
{
    public function index() {

        return view('dashboard.information.index')->with('information', Information::all()->first());
    }

    public function update(UpdateInformationRequest $request,Information $information) {
    
        $information = $information->update([
            'info_head' => $request->info_head,
            'info_description' => $request->info_description
        ]);

        if($information) {
            session()->flash('success', 'Information Page Updated Successfully');
        } else {
            session()->flash('error', 'Sorry Something Went Wrong');
        }

        return redirect()->route('information.index');
    }
}
