<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Episodio;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exibir()
    {
        return view('movflx.programa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $programas = Programa::orderBy("nome_programa")->get();

        $programa = new Programa;

        $validated = $request->validate([
            'nome_programa' => 'string',
            'sinopse' => 'string',
            'ano' => 'numeric',
            'tags' => 'string'
        ]);

        $programa->nome_programa = $request->nome_programa;
        $programa->sinopse = $request->sinopse;
        $programa->ano = $request->ano;
        $programa->tags = $request->tags;

        $programa->save();

        $this->addPoster($request, $programa->id);
        $this->addPosterMaior($request, $programa->id);

        //return view('dashboard',["mensagem"=>"Programa adicionado com sucesso", "programas"=>$programas]);

        return redirect()
        ->back()
        ->with(["programas"=>$programas])
        ->withErrors(["mensagem"=>"Programa adicionado com sucesso"])
        ->withInput();
    }

    public function createEpisode(Request $request)
    {
        $programas = Programa::orderBy("nome_programa")->get();

        $episodio = new Episodio;

        $validated = $request->validate([
            'id_programa' => 'numeric',
            'titulo' => 'string',
            'url_video' => 'string',
            'duracao' => 'numeric',
            'data_lançamento' => 'date',
            ]);

        $episodio->id_programa = $request->id_programa;
        $episodio->titulo = $request->titulo;
        $episodio->url_video = $request->url_video;
        $episodio->duracao = $request->duracao;
        $episodio->data_lançamento = $request->data_lançamento;

        $episodio->save();

        //return view('dashboard',["mensagem"=>"Episodio adicionado com sucesso", "programas"=>$programas]);

        return redirect()
        ->back()
        ->with(["programas"=>$programas])
        ->withErrors(["mensagem"=>"Episodio adicionado com sucesso"])
        ->withInput();
    }

    public function addPoster(Request $request, $programaId)
    {

        $programa = Programa::find($programaId);

		if (isset($request->allFiles()['poster'])){

			$imagem = $request->allFiles()['poster'];

			 // Define o valor default para a variável que contém o nome da imagem
			$nameFile = null;

			// Verifica se o arquivo é válido
			if ($imagem->isValid()) {

				// Verifica se o arquivo de fato é uma imagem
				$mimeType = $imagem->getMimeType();

				if(!str_contains($mimeType, 'image')){
					return redirect()
									->back()
									->with(['mensagem'=> 'Falha ao fazer upload','success' => false])
									->withInput();
				}

				// Define um aleatório para o arquivo baseado no timestamps atual
				$name = uniqid(date('HisYmd'));

				// Recupera a extensão do arquivo
				$extension = $imagem->extension();

				// Define finalmente o nome
				$nameFile = "{$name}.{$extension}";

				// Faz o upload:
				$upload = $imagem->storeAs('imagens/'.'programas/'.$programa->id, $nameFile);
				// Se tiver funcionado o arquivo foi armazenado em storage/app/public/imagens/id/nomedinamicoarquivo.extensao

				// Verifica se NÃO deu certo o upload (Redireciona de volta)
				if ( !$upload ){
					return redirect()
								->back()
								->withErrors(['mensagem'=> 'Falha ao fazer upload','success' => false])
								->withInput();
				}else{
                    $programa->url_poster = $upload;
                    $programa->save();
                }

				
			}
		}

        return redirect()
                ->back()
                ->with(['mensagem'=> 'Upload de Imagens feito'])
                ->withInput();
    }

    public function addPosterMaior(Request $request, $programaId)
    {

        $programa = Programa::find($programaId);

		if (isset($request->allFiles()['posterMaior'])){

			$imagem = $request->allFiles()['posterMaior'];

			 // Define o valor default para a variável que contém o nome da imagem
			$nameFile = null;

			// Verifica se o arquivo é válido
			if ($imagem->isValid()) {

				// Verifica se o arquivo de fato é uma imagem
				$mimeType = $imagem->getMimeType();

				if(!str_contains($mimeType, 'image')){
					return redirect()
									->back()
									->with(['mensagem'=> 'Falha ao fazer upload','success' => false])
									->withInput();
				}

				// Define um aleatório para o arquivo baseado no timestamps atual
				$name = uniqid(date('HisYmd'));

				// Recupera a extensão do arquivo
				$extension = $imagem->extension();

				// Define finalmente o nome
				$nameFile = "{$name}.{$extension}";

				// Faz o upload:
				$upload = $imagem->storeAs('imagens/'.'programas/'.$programa->id, $nameFile);
				// Se tiver funcionado o arquivo foi armazenado em storage/app/public/imagens/id/nomedinamicoarquivo.extensao

				// Verifica se NÃO deu certo o upload (Redireciona de volta)
				if ( !$upload ){
					return redirect()
								->back()
								->withErrors(['mensagem'=> 'Falha ao fazer upload','success' => false])
								->withInput();
				}else{
                    $programa->url_poster_maior = $upload;
                    $programa->save();
                }

				
			}
		}

        return redirect()
                ->back()
                ->with(['mensagem'=> 'Upload de Imagens feito'])
                ->withInput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
