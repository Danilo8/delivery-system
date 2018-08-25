<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Função que retorna a view INDEX
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Função que retorna a view SOBRE
     *
     * @return void
     */
    public function sobre()
    {
        return view('sobre');
    }

    /**
     * Função que retorna a view TERMOS
     *
     * @return void
     */
    public function termos()
    {
        return view('termos');
    }

    /**
     * Função que retorna a view PRIVACIDADE
     *
     * @return void
     */
    public function privacidade()
    {
        return view('privacidade');
    }

    /**
     * Função que retorna a view CONTATO
     *
     * @return void
     */
    public function contato()
    {
        return view('contato');
    }
}
