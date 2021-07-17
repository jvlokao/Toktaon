<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $programas = Programa::orderBy("nome_programa")->get();

        return view('dashboard',["programas"=>$programas]);
    }
}
