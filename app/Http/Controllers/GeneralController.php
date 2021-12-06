<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\General\UpdateGeneralRequest;

class GeneralController extends Controller
{
    public function index() {

        return view('dashboard.general.index')->with('general', General::all()->first());
    }

    public function update(UpdateGeneralRequest $request, General $general) {

        if($request->logo_image) {

            $name = time().'.'.$request->logo_image->extension();
            // Check if Dir exists
            if (!Storage::disk('public')->exists('logo'))
            {
                Storage::disk('public')->makeDirectory('logo');
            }
            Storage::disk('public')->put('logo/'. $name,File::get($request->logo_image));

        } else {
            $name = NULL;
        }

       $oldImagePath = $general->logo_image;

        $general = $general->update([
            'website_title' => $request->website_title,
            'logo_image' => 'logo/' . $name,
        ]);

        if($general) {

            Storage::disk('public')->delete($oldImagePath);

            session()->flash('success', 'General Page Updated Successfully');

        } else {
            session()->flash('error', 'Sorry Something Went Wrong');
        }

        return redirect()->route('general.index');
    }
}
