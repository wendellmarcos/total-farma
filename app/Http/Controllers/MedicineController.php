<?php

namespace App\Http\Controllers;

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

        return view('medicines.create');
    }


    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'manufacturer' => 'required|string|max:255',
            'expiration_date' => 'required|date',
            'stock' => 'required|integer|min:0',
        ]);

        Medicine::create($validated);
        return redirect()->route('medicines.index');
        
    }
}
