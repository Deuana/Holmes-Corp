<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Http\Requests\ProfessorRequest;

class ProfessorsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $professors = Professor::paginate();

        return view('professors.index', compact('professors'));
    }

    public function show(Professor $professor)
    {
        return view('professors.show', compact('professor'));
    }

    public function create(Professor $professor)
    {
        return view('professors.create_and_edit', compact('professor'));
    }

    public function store(ProfessorRequest $request)
    {
        $professor = Professor::create($request->all());

        return redirect()->route('professors.show', $professor->id)->with('message', 'Created successfully.');
    }

    public function edit(Professor $professor)
    {
        $this->authorize('update', $professor);

        return view('professors.create_and_edit', compact('professor'));
    }

    public function update(ProfessorRequest $request, Professor $professor)
    {
        $this->authorize('update', $professor);
        $professor->update($request->all());

        return redirect()->route('professors.show', $professor->id)->with('message', 'Updated successfully.');
    }

    public function destroy(Professor $professor)
    {
        $this->authorize('destroy', $professor);
        $professor->delete();

        return redirect()->route('professors.index')->with('message', 'Deleted successfully.');
    }
}
