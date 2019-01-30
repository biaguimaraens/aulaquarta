<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\emprestimos;

use App\Http\Resources\EmprestimosResource;

class EmprestimosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return EmprestimosResource::collection(emprestimos::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $emprestimo = new emprestimos;
      $emprestimo->status = $request->status;
      $emprestimo->dataDeInicio = $request->dataDeInicio;
      $emprestimo->dataDeTermino = $request->dataDeTermino;
      $emprestimo->anoDeLancamento = $request->anoDeLancamento;
      $emprestimo->idCliente = $request->idCliente;
      $emprestimo->idLivro = $request->idLivro;
      $emprestimo->save();
      return new EmprestimosResource($emprestimo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $emprestimo = emprestimos::findOrFail($id);
      return new EmprestimosResource($emprestimo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $emprestimo = emprestimos::findOrFail($id);
      if($request->status)
        $emprestimo->status = $request->status;
      if($request->dataDeInicio)
        $emprestimo->dataDeInicio = $request->dataDeInicio;
      if($request->dataDeTermino)
        $emprestimo->dataDeTermino = $request->dataDeTermino;
      if($request->anoDeLancamento)
        $emprestimo->anoDeLancamento = $request->anoDeLancamento;
      if($request->idCliente)
        $emprestimo->idCliente = $request->idCliente;
      if($request->idLivro)
        $emprestimo->idLivro = $request->idLivro;
      return new EmprestimosResource($emprestimo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      emprestimos::destroy($id);
      return response()->json(['DELETADO']);
    }
}
