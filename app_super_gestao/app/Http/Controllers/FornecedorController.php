<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
   public function index(){
    $fornecedores = [
        0 => [
            'nome' => 'Fornecedor 1',
            'status' => 'N',
            'cnpj' => '0',
            'ddd' => '', //sao paulo (sp)
            'telefone' => '0000-0000'
        ],
        1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S',
            'cnpj' => null,
            'ddd' => '85', //Fortaleza (CE)
            'telefone' => '0000-0000'
        ],
        2 => [
            'nome' => 'Fornecedor 3',
            'status' => 'S',
            'cnpj' => '45369947000102',
            'ddd' => '41', //Parana (PR)
            'telefone' => '0000-0000'
        ],
        3 => [
            'nome' => 'Fornecedor 4',
            'status' => 'N',
            'cnpj' => null,
            'ddd' => '42', //Parana (PR)
            'telefone' => '0000-0000'
        ],
        4 => [
            'nome' => 'Fornecedor 5',
            'status' => 'N',
            'cnpj' => null,
            'ddd' => '11', //Sao Paulo (SP)
            'telefone' => '0000-0000'
        ],
    ];
   }
}
