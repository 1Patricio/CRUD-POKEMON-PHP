@extends('layouts.base')

@section('titulo', 'Criar')

@section('conteudo')
<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark text-center">Cadastro de Pokémons</h1>
<form action="{{ url('pokemons') }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-3">
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Pokemon:</label>
        <input type="textarea" id="nome" name="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cadastre seu Pokémon" required />
    </div>
    <div class="mb-3">
        <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Tipo:</label>
        <input type="text" id="tipo" name="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-3">
        <label for="pontos_de_poder" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Pontos de Poder:</label>
        <input type="number" name="pontos_de_poder" id="pontos_de_poder" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="flex items-start mb-3">
        <div class="flex items-center h-5">
            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Preparem-se para encrenca!</label>
    </div>

    <div class="mt-4">
        <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escolha um treinador</label>
        <select id="coach_id" name="coach_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Escolha um treinador</option>
            @foreach($coaches as $coach)
                <option value="{{ $coach->id }}">{{ $coach->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Criar Pokemon</button>
</form>
@endsection