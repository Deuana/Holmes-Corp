<?php

namespace App\Http\Controllers;

use App\Models\DisciplinaCurso;
use App\Http\Requests\DisciplinaCursoRequest;

class DisciplinaCursosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $disciplina_cursos = DisciplinaCurso::paginate();

        return view('disciplina_cursos.index', compact('disciplina_cursos'));
    }

    public function show(DisciplinaCurso $disciplina_curso)
    {
        return view('disciplina_cursos.show', compact('disciplina_curso'));
    }

    public function create(DisciplinaCurso $disciplina_curso)
    {
        return view('disciplina_cursos.create_and_edit', compact('disciplina_curso'));
    }

    public function store(DisciplinaCursoRequest $request)
    {
        $disciplina_curso = DisciplinaCurso::create($request->all());

        return redirect()->route('disciplina_cursos.show', $disciplina_curso->id)->with('message', 'Created successfully.');
    }

    public function edit(DisciplinaCurso $disciplina_curso)
    {
        $this->authorize('update', $disciplina_curso);

        return view('disciplina_cursos.create_and_edit', compact('disciplina_curso'));
    }

    public function update(DisciplinaCursoRequest $request, DisciplinaCurso $disciplina_curso)
    {
        $this->authorize('update', $disciplina_curso);
        $disciplina_curso->update($request->all());

        return redirect()->route('disciplina_cursos.show', $disciplina_curso->id)->with('message', 'Updated successfully.');
    }

    public function destroy(DisciplinaCurso $disciplina_curso)
    {
        $this->authorize('destroy', $disciplina_curso);
        $disciplina_curso->delete();

        return redirect()->route('disciplina_cursos.index')->with('message', 'Deleted successfully.');
    }
}
