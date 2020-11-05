<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
   
    public function index() {
  	//$livros = Livro::all(); 
   	//	$livros = Livro::all()->sortbydesc('idl');

 $generos = Genero::paginate(4);
   	return view ('generos.index', [
   		'generos'=>$generos
   	]);
  }
}


