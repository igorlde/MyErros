<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreProblemRequest;
use App\Http\Requests\UpdateProblemRequest;
use App\Models\Problem;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     * is get
     */
    public function index()
    {
        $problems = Problem::with('user')->get();
        return view('home', ['problems' => $problems]);
    }
    /**
     * Show the form for creating a new resource.
     * is get
     */
    public function create()
    {
        return view('creates.problem');
    }

    /**
     * Store a newly created resource in storage.
     * is post
     */
    public function store(StoreProblemRequest $request)
    {
        $data = $request->validated();
        Problem::create($data);
        return redirect()->route('home')->with('success', 'Create problem with success');
    }

    /**
     * Display the specified resource.
     * is get
     */
    public function show(string $id)
    {
        $problem = Problem::findOrfail($id);
        return view('show.problem', ['problem' => $problem]);
    }

    /**
     * Show the form for editing the specified resource.
     * is get
     */
    public function edit(Problem $problem)
    {
        return view('updates.problemUp', ['problem' => $problem]);
    }

    /**
     * Update the specified resource in storage.
     * is put
     */
    public function update(UpdateProblemRequest $request, Problem $problem)
    {
    
        $problem->update($request->validate());
        return redirect()->route('home')->with('success', 'Update datas you problem with success');
    }

    /**
     * Remove the specified resource from storage.
     * is delete.
     */
    public function destroy(string $id)
    {
        $problem = Problem::findOrFail($id);
        $problem->delete();
        return redirect()->route('home')->with('success', 'Delete with success');
    }
}
