<!-- @extends('layouts.base')

@section('titulo', 'Listar')

@section('navbar') -->
<nav class="bg-white border-gray-200 dark:bg-gray-900 w-full">
  <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-center p-4">
    <div class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/pokemons" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Lista de Pokémons</a>
        </li>
        <li>
          <a href="/pokemons/create" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cadastrar Pokémon</a>
        </li>
      </ul>
    </div>
  </div>
</nav>