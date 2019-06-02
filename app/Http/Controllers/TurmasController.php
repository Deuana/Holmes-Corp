<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Http\Requests\TurmaRequest;

class TurmasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $turmas = Turma::paginate();

        return view('turmas.index', compact('turmas'));
    }

    public function show(Turma $turma)
    {
        return view('turmas.show', compact('turma'));
    }

    public function create(Turma $turma)
    {
        return view('turmas.create_and_edit', compact('turma'));
    }

    public function store(TurmaRequest $request)
    {
        $turma = Turma::create($request->all());

        return redirect()->route('turmas.show', $turma->id)->with('message', 'Created successfully.');
    }

    public function edit(Turma $turma)
    {
        $this->authorize('update', $turma);

        return view('turmas.create_and_edit', compact('turma'));
    }

    public function update(TurmaRequest $request, Turma $turma)
    {
        $this->authorize('update', $turma);
        $turma->update($request->all());

        return redirect()->route('turmas.show', $turma->id)->with('message', 'Updated successfully.');
    }

    public function destroy(Turma $turma)
    {
        $this->authorize('destroy', $turma);
        $turma->delete();

        return redirect()->route('turmas.index')->with('message', 'Deleted successfully.');
    }
}
