<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coachs = Coach::all();
        return view('coachs.index', compact('coachs'));
    }
    
    public function create()
    {
        return view('coachs.create');
    }
    
    public function store(Request $request)
    {
        Coach::create($request->all());
        return redirect('coachs')->with('success', 'coach created successfully.');
    }
    
    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coachs.edit', compact('coach'));
    }
    
    public function update(Request $request, $id)
    {
        $Coach = Coach::findOrFail($id);
        $Coach->update($request->all());
        return redirect('coachs')->with('success', 'coach updated successfully.');
    }
    
    public function destroy($id)
    {
        $Coach = Coach::findOrFail($id);
        $Coach->delete();
        return redirect('coachs')->with('success', 'coach deleted successfully.');
    }
}
