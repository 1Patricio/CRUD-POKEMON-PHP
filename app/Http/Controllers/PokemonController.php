<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }
    
    public function create()
    {
        Gate::authorize('create', Pokemon::class); 

        $coaches = Coach::all();
        return view('pokemons.create', compact('coaches'));
    }
    
    public function store(Request $request)
    {
        Pokemon::create($request->all());
        return redirect('pokemons')->with('success', 'pokemon created successfully.');
    }
    
    public function edit($id)
    {
        Gate::authorize('uptade', Pokemon::class);

        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemon'));
    }
    
    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all());
        return redirect('pokemons')->with('success', 'pokemon updated successfully.');
    }
    
    public function destroy($id)
    {
        Gate::authorize('delete', Pokemon::class);

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemons')->with('success', 'pokemon deleted successfully.');
    }
}
