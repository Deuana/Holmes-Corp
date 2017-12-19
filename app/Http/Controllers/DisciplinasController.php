<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisciplinaRequest;

class DisciplinasController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$disciplinas = Disciplina::paginate();
		return view('disciplinas.index', compact('disciplinas'));
	}

    public function show(Disciplina $disciplina)
    {
        return view('disciplinas.show', compact('disciplina'));
    }

	public function create(Disciplina $disciplina)
	{
		return view('disciplinas.create_and_edit', compact('disciplina'));
	}

	public function store(DisciplinaRequest $request)
	{
		$disciplina = Disciplina::create($request->all());
		return redirect()->route('disciplinas.show', $disciplina->id)->with('message', 'Created successfully.');
	}

	public function edit(Disciplina $disciplina)
	{
        //$this->authorize('update', $disciplina);
		return view('disciplinas.create_and_edit', compact('disciplina'));
	}

	public function update(DisciplinaRequest $request, Disciplina $disciplina)
	{
		$this->authorize('update', $disciplina);
		$disciplina->update($request->all());

		return redirect()->route('disciplinas.show', $disciplina->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Disciplina $disciplina)
	{
		$this->authorize('destroy', $disciplina);
		$disciplina->delete();

		return redirect()->route('disciplinas.index')->with('message', 'Deleted successfully.');
	}
}