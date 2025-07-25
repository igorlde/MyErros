<?php

namespace App\Http\Controllers;

use App\Enums\Programing_language;
use App\Models\SendSolutions;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

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
    public function create()
    {
        return view('creates.send');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'erro' => 'required|text',
            'language' => ['required', new Enum(Programing_language::class)],
            'problem_id' => 'required|BigInteger',
            'user_id' => 'required|BigInteger',
            'code_solution' => 'required|text',
            'explanation' => 'required|string|max:255'
        ]);
        SendSolutions::create($validation);
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
    public function edit(string $id)
    {
        $solution = SendSolutions::findOrFail($id);
        return view('edit.solution', ['solution' => $solution]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            'erro' => 'required|text',
            'language' => ['required', new Enum(Programing_language::class)],
            'problem_id' => 'required|BigInteger',
            'user_id' => 'required|BigInteger',
            'code_solution' => 'required|text',
            'explanation' => 'required|string|max:255'

        ]);
        $solution = SendSolutions::findOrFail($id);
        $solution->update($validation);
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
