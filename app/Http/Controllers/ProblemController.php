<?php

namespace App\Http\Controllers;

use App\Enums\Languages;
use App\Enums\Programing_language;
use App\Models\Problem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

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
    public function store(Request $request)
    {
        $validation = $request->validate([
            'code' => 'required|string|max:255',
            'language' => ['required', new Enum(Programing_language::class)],
            'translations.*.erro' => 'required|string',
            'translations.*.description' => 'required|string'
        ]);
        $problem = Problem::create([
            'code' => $validation['code'],
            'language' => $validation['language'],
        ]);

        //part of code that check your language speak.
         foreach ($validation['translations'] as $translation) {
        $problem->translations()->create([
            'language' => $translation['language'],
            'erro' => $translation['erro'],
            'description_erro' => $translation['description_erro'],
        ]);
    }
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
    public function edit(string $id)
    {
        $problem_id = Problem::findOrFail($id);
        return view('updates.problemUp', ['problem_id' => $problem_id]);
    }

    /**
     * Update the specified resource in storage.
     * is put
     */
    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
             'code' => 'required|string|max:255',
            'language' => ['required', new Enum(Programing_language::class)],
            'translations' => 'required:array',
             'translations.*language' => ['required', new Enum(Languages::class)], 
            'translations.*.erro' => 'required|string',
            'translations.*.description' => 'required|string'
        ]);
        $problem = Problem::findOrFail($id);
        $problem->update($validation);
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
