<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSendSolutionRequest;
use App\Http\Requests\UpdateSendSolutionRequest;
use App\Models\Problem;
use App\Models\SendSolutions;

class SendSolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $id)
    {
        $problem = Problem::findOrFail($id);//get id of problem whos will solve.
        return view('creates.send', ['problem' => $problem]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSendSolutionRequest $request)
    {
        SendSolutions::create($request->validate());
        return redirect()->route('home')->with('success', 'Send your solution with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $solution = SendSolutions::findOrFail($id);
        return view('show.solution', ['solution' => $solution]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SendSolutions $solution)
    {
        return view('edit.solution', ['solution' => $solution]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSendSolutionRequest $request, SendSolutions $solution)
    {
        $solution->update($request->validate());
        return redirect()->route('home')->with('success', 'Update svae with sucess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $solution = SendSolutions::findOrFail($id);
        $solution->delete();
        return redirect()->route('home');
    }
}
