<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Marvel;

class MarvelController extends Controller
{
    public function index(){
        $marvel = new Marvel();
        $dados = $marvel->getAllHeroes();

        dd($dados);
        return view('principal')->with(compact('dados'));
    }

    public function details($id){

        return view('details');
    }
}
