<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\emprestimos;

class EmprestimosController extends Controller
{
  public function create(Request $request){
    $emprestimos = new emprestimos;
    $emprestimos->status = $request->status;
    $emprestimos->dataDeInicio = $request->dataDeInicio;
    $emprestimos->dataDeTermino = $request->dataDeTermino;
    $emprestimos->anoDeLancamento = $request->anoDeLancamento;
    $emprestimos->idCliente = $request->idCliente;
    $emprestimos->idLivro = $request->idLivro;
    $emprestimos->save();
    return response()->json([$emprestimos]);
  }
}
