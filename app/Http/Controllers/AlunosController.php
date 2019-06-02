<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;

class AlunosController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $alunos = Aluno::paginate();

        return view('alunos.index', compact('alunos'));
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function create(Aluno $aluno)
    {
        return view('alunos.create_and_edit', compact('aluno'));
    }

    public function store(AlunoRequest $request)
    {
        $aluno = Aluno::create($request->all());

        return redirect()->route('alunos.show', $aluno->id)->with('message', 'Created successfully.');
    }

    public function edit(Aluno $aluno)
    {
        $this->authorize('update', $aluno);

        return view('alunos.create_and_edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        $this->authorize('update', $aluno);
        $aluno->update($request->all());

        return redirect()->route('alunos.show', $aluno->id)->with('message', 'Updated successfully.');
    }

    public function destroy(Aluno $aluno)
    {
        $this->authorize('destroy', $aluno);
        $aluno->delete();

        return redirect()->route('alunos.index')->with('message', 'Deleted successfully.');
    }
}
