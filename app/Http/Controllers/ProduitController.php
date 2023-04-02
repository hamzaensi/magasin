<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
    $validated = $request->validate(['nom'=>['required'],'prix'=>['required'],'quantite'=>['required']]);
     
      
     Produit::create($validated);
     return to_route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        
        return view('produits.edit',compact('produit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
     $validated = $request->validate(['nom'=>['required'],'prix'=>['required'],'quantite'=>['required']]);
     $produit->update($validated);
     return to_route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        
        $produit->delete();
        return to_route('produits.index'); 
        
    }
}
