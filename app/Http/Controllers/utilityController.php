<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUtilityRequest;
use App\Models\Utility;
use Illuminate\Http\Request;

class utilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homes.utilityHome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creates.utility');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUtilityRequest $request)
    {
        Utility::create($request->validate());
        return redirect()->back()->with('success', 'create datas with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utility $utility)
    {
        return view('updates.utilityUp', ['utility' => $utility]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utility $utility)
    {
        $utility->update($request->validate());
        return redirect()->back()->with('success', 'update with success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
