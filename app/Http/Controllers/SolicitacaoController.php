<?php

namespace App\Http\Controllers;

use App\Solicitacao;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{

  public function index(){

      return Solicitacao::all();
}

  public function store(Request $request){

    $request->validate([

      'nome_condutor'=>'required|max: 50'
      'sexo'=>'required|max: 1'
      'data_nascimento'=>'required|max: 10'
      'marca'=>'required|max: 20'
      'veiculo'=>'required|max: 20'
    ]);


    $solicitacao = Solicitacao::create([
      'nome_condutor'=>$request->input('name_condutor'),
      'sexo'=>$request->input('sexo'),
      'data_nascimento'=>$request->input('data_nascimento'),
      'marca'=>$request->input('marca'),
      'veiculo'=>$request->input('veiculo')
    ]);
    return $solicitacao;
  }
  public function show(Solicitacao $solicitacao){

    return $solicitacao;
  }
  public function update(Request $request, Solicitacao $solicitacao){

    $request->validate([

      'nome_condutor'=>'required|max: 50'
      'sexo'=>'required|max: 1'
      'data_nascimento'=>'required|max: 10'
      'marca'=>'required|max: 20'
      'veiculo'=>'required|max: 20'
    ]);

    $solicitacaok->name_condutor = $request->input('name_condutor');

    $solicitacao->save();

    return $solicitacao;
  }

  public function delete(Solicitacao $solicitacao){

    $solicitacao->delete();

    return response()->json(['Sucess'=>true]);
  }


}
