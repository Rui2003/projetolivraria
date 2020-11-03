<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    use HasFactory;

    //indicar qual a chave primária da tabela Livros
    protected $primaryKey="idl";

    //esta propiedade não é necessária
    //mas vai ajudar-nos em situações futuras
    protected $table ="livros";
}
