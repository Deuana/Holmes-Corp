<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartamentoRequest;

class DepartamentosController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$departamentos = Departamento::paginate();
		return view('departamentos.index', compact('departamentos'));
	}

    public function show(Departamento $departamento)
    {
        return view('departamentos.show', compact('departamento'));
    }

	public function create(Departamento $departamento)
	{
		return view('departamentos.create_and_edit', compact('departamento'));
	}

	public function store(DepartamentoRequest $request)
	{
		$departamento = Departamento::create($request->all());
		return redirect()->route('departamentos.show', $departamento->id)->with('message', 'Created successfully.');
	}

	public function edit(Departamento $departamento)
	{
        $this->authorize('update', $departamento);
		return view('departamentos.create_and_edit', compact('departamento'));
	}

	public function update(DepartamentoRequest $request, Departamento $departamento)
	{
		$this->authorize('update', $departamento);
		$departamento->update($request->all());

		return redirect()->route('departamentos.show', $departamento->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Departamento $departamento)
	{
		$this->authorize('destroy', $departamento);
		$departamento->delete();

		return redirect()->route('departamentos.index')->with('message', 'Deleted successfully.');
	}
}