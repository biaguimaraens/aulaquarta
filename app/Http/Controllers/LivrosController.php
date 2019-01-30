<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\livros;

class LivrosController extends Controller
{
  public function create(Request $request){
    $livro = new livros;
    $livro->titulo = $request->titulo;
    $livro->autor = $request->autor;
    $livro->editora = $request->editora;
    $livro->versao = $request->versao;
    $livro->anoDeLancamento = $request->anoDeLancamento;
    $livro->qntdEstoque = $request->qntdEstoque;
    $livro->qntdEmprestada = $request->qntdEmprestada;
    $livro->save();
    return response()->json([$livro]);
  }
}
