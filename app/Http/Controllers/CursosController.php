<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\CursoRequest;

class CursosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function create(Curso $curso)
    {
        return view('cursos.create_and_edit', compact('curso'));
    }

    public function store(CursoRequest $request)
    {
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id)->with('message', 'Created successfully.');
    }

    public function edit(Curso $curso)
    {
        $this->authorize('update', $curso);

        return view('cursos.create_and_edit', compact('curso'));
    }

    public function update(CursoRequest $request, Curso $curso)
    {
        $this->authorize('update', $curso);
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id)->with('message', 'Updated successfully.');
    }

    public function destroy(Curso $curso)
    {
        $this->authorize('destroy', $curso);
        $curso->delete();

        return redirect()->route('cursos.index')->with('message', 'Deleted successfully.');
    }
}
