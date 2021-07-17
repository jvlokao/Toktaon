<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if ($errors->any())
                    <div class="alert alert-primary">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Criar Programa</h1>

                    <form action="/admin/criarprograma" method="post" enctype="multipart/form-data"><br>
                    @csrf

                        <label for="nome_programa">Insira o Nome do Programa</label><br>
                        <input style="width:40%" placeholder="Programa 1" id="nome_programa" name="nome_programa" type="text"><br><br>

                        <label for="ano">Insira o Ano do Programa</label><br>
                        <input style="width:40%" placeholder="2021" id="ano" name="ano" type="number"><br><br>

                        <label for="tags">Insira as Tags do Programa</label><br>
                        <input style="width:40%" placeholder="Documentario, Filme, Culinaria, Etc..." id="tags" name="tags" type="text"><br><br>

                        <label for="sinopse">Insira a Sinopse do Programa</label><br>
                        <textarea style="width:40%; resize: none;" rows="4" placeholder="Sinopse do Programa 1" id="sinopse" name="sinopse" type="text"></textarea><br><br>

                        <label for="poster">Insira o Poster Menor do Programa</label><br>
                        <input style="width:40%" placeholder="Poster.jpg" id="poster" name="poster" type="file"><br><br>

                        <label for="posterMaior">Insira o Poster Maior do Programa</label><br>
                        <input style="width:40%" placeholder="Poster.jpg" id="posterMaior" name="posterMaior" type="file"><br><br>

                        <button style="border: 2px; border-style:solid; padding: 10px; background-color:#e1fcfb;" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Adicionar Episodio</h1>

                    <form action="/admin/addepisodio" method="post" enctype="multipart/form-data"><br>
                        @csrf

                        <label for="id_programa">Selecione o Programa</label><br>
                        <select name="id_programa" id="id_programa">
                            <option value="">Selecione um Programa</option>
                            @foreach ($programas as $programa)
                                <option value="{{$programa->id}}">{{$programa->nome_programa}}</option>
                            @endforeach
                        </select><br><br>

                        <label for="titulo">Insira o Titulo do Episodio</label><br>
                        <input style="width:40%" placeholder="Episodio 1" id="titulo" name="titulo" type="text"><br><br>

                        <label for="url_video">Insira o URL do Video do Programa</label><br>
                        <input style="width:40%" placeholder="http://www.youtube.com" id="url_video" name="url_video" type="text"><br><br>

                        <label for="duracao">Insira a Duração do Episodio (Em Minutos)</label><br>
                        <input style="width:40%;" placeholder="30" id="duracao" name="duracao" type="number"><br><br>

                        <label for="data_lançamento">Insira a Data de Lançamento</label><br>
                        <input style="width:40%" id="data_lançamento" name="data_lançamento" type="date"><br><br>

                        <button style="border: 2px; border-style:solid; padding: 10px; background-color:#e1fcfb;" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
