<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Http\Requests\Navigations\CreateNavigationRequest;
use App\Http\Requests\Navigations\UpdateNavigationRequest;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.navigation.index')->with('navigations', Navigation::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.navigation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNavigationRequest $request)
    {
        $navigation = Navigation::create([
            'name' => $request->name,
            'link' => $request->link
        ]);

        if($navigation) {
            session()->flash('success', 'Navigation Created Successfully');
        } else {
            session()->flash('error', 'Sorry Something Went Wrong');
        }

        return redirect()->route('navigation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Navigation $navigation)
    {
        return view('dashboard.navigation.edit')->with('navigation', $navigation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNavigationRequest $request, Navigation $navigation)
    {

        $navigation = $navigation->update([
            'name' => $request->name,
            'link' => $request->link
        ]);

        if($navigation) {
            session()->flash('success', 'Navigation Updated Successfully');
        } else {
            session()->flash('error', 'Sorry Something Went Wrong');
        }

        return redirect()->route('navigation.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navigation $navigation)
    {
        $navigation = $navigation->delete();

        if($navigation) {
            session()->flash('success', 'Navigation Deleted Successfully');
        } else {
            session()->flash('error', 'Sorry Something Went Wrong');
        }

        return redirect()->route('navigation.index');
    }
}
