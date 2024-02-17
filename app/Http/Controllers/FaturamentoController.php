<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaturamentoController extends Controller
{
    public function index()
    {
        return view('faturamento.index');
    }
}
