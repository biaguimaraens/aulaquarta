<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\clients;

class ClientsController extends Controller
{
  public function create(Request $request){
    $cliente = new Clients;
    $cliente->telefone = $request->telefone;
    $cliente->dataDeNascimento = $request->dataDeNascimento;
    $cliente->endereco = $request->endereco;
    $cliente->nome = $request->nome;
    $cliente->cpf = $request->cpf;
    $cliente->save();
    return response()->json([$cliente]);
  }
  public function list(){
    return Clients::all();
  }
  public function show($id){
    $cliente = Clients::findOrFail($id);
    return response()->json([$cliente]);
  }
  public function update(Request $request, $id){
    $cliente = Clients::findOrFail($id);
    if($request->nome)
      $cliente->nome = $request->nome;
    if($request->telefone)
      $cliente->telefone = $request->telefone;
    if($request->data_nascimento)
      $cliente->data_nascimento = $request->data_nascimento;
    if($request->endereco)
      $cliente->endereco = $request->endereco;
    if($request->cpf)
      $cliente->cpf = $request->cpf;
    return response()->json([$cliente]);
  }
  public function delete($id){
    Clients::destroy($id);
    return response()->json(['DELETADO']);
}
}
