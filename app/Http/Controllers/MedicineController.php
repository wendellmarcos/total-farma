<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Medicine;
class MedicineController extends Controller
{
    public function index(){
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));
    }

    public function welcome() {
        return view('welcome');
    }
    
    public function create(){
        $listaCategorias = Categories::all();
        //dd($listaCategorias);
        return view('medicines.create',['categorias' => $listaCategorias]);
    }


    public function store(Request $request)
    {
       

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'manufacturer' => 'required|string|max:255',
            'expiration_date' => 'required|date|after:today',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|file|image|max:2048',
            'categories_id' => 'required'
        ]);

        Medicine::create($validated);
    
        return redirect()->route('medicines.index')->with('success', 'Medicamento cadastrado com sucesso!');
    }

    public function edit($id)
{
    $medicine = Medicine::findOrFail($id);
    return view('medicines.edit', compact('medicine'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([

        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'manufacturer' => 'required|string|max:255',
        'categories'=> 'required|string|max:255',
        'expiration_date' => 'required|date|after:today',
        'quantity' => 'required|integer|min:0',
        'image' => 'nullable|file|image|max:2048',
    ]);

    $medicine = Medicine::findOrFail($id);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store(
            'images',
            'public'
        );
    }

    $medicine->update($validated);

    return redirect()->route('medicines.index')->with('success', 'Medicamento atualizado com sucesso!');
}




}
