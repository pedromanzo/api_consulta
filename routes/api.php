<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("solicitacao", "SolicitacaoController@index");
Route::get("solicitacao/{solicitacao}", "SolicitacaoController@show");
Route::post("solicitacao", "SolicitacaoController@store");
Route::patch("solicitacao/{solicitacao}", "SolicitacaoController@update");
Route::delete("solicitacao/{solicitacao}", "SolicitacaoController@delete");
