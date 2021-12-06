<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Requests\Home\UpdateHomeRequest;

class HomeController extends Controller
{
    public function index() {

        return view('dashboard.home.index')->with('home', Home::all()->first());
    }

    public function update(UpdateHomeRequest $request, Home $home) {

        $home = $home->update([
            'before_name' => $request->before_name,
            'name' => $request->name,
            'after_name' => $request->after_name,
            'description' => $request->description,
            'fb_link' => $request->fb_link,
            'insta_link' => $request->insta_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link
        ]);

        if($home) {
            session()->flash('success', 'Home Page Updated Successfully');
        } else {
            session()->flash('error', 'Sorry Something Went Wrong');
        }

        return redirect()->route('home.index');
    }
}
