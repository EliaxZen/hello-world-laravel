<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('bem_vindo');
    }
    // Método para o primeiro exercício
    public function exercicio1()
    {
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2
            ]
        ];

        $dados['pessoas'] = $pessoas;

        return view('exercice1', $dados);
    }

    // Método para o segundo exercício
    public function exercicio2()
    {
        $url = 'https://i.pravatar.cc/150?img=';
        $dados['url'] = $url;

        return view('exercice2', $dados);
    }
}
