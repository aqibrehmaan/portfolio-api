<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Information\UpdateInformationRequest;

class InformationController extends Controller
{
    public function index() {

        return view('dashboard.information.index')->with('information', Information::all()->first());
    }

    public function update(UpdateInformationRequest $request,Information $information) {

        if($request->info_image) {

            $name = time().'.'.$request->info_image->extension();
            // Check if Dir exists
            if (!Storage::disk('public')->exists('info'))
            {
                Storage::disk('public')->makeDirectory('info');
            }
            Storage::disk('public')->put('info/'. $name,File::get($request->info_image));

        } else {
            $name = NULL;
        }

       $oldImagePath = $information->info_image;

       $information = $information->update([
        'info_head' => $request->info_head,
        'info_description' => $request->info_description,
        'info_image' => 'info/' . $name
        ]);

        if($information) {
            Storage::disk('public')->delete($oldImagePath);
            session()->flash('success', 'Information Page Updated Successfully');
        } else {
            session()->flash('error', 'Sorry Something Went Wrong');
        }

        return redirect()->route('information.index');
    }
}
