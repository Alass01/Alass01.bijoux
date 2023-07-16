<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produits;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = produits::all();

        return response()->json($produits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required',
            'description'=>'required',
            'prix'=>'required',
            'quantite'=>'required',
            'img_url'=>'required',
            'categorie_id'=>'required',



        ]);

        $produit = produits::create([

            'nom'=>$request->nom,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite,
            'img_url'=>$request->img_url,
            'categorie_id'=>$request->categorie_id
            
        ]);
        return  response()->json([
            $produit

        ]); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = produits::findOrFail($id);

        return response()->json($produit);
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
        $this->validate($request,[
            'nom'=>'required',
            'description'=>'required',
            'prix'=>'required',
            'quantite'=>'required',

        ]);

        $produit = produits::update([

            'nom'=>$request->nom,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite,
            
        ]);
        return  response()->json([
            $produit

        ]); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = produits::destroy($id);

        return  response()->json([
            'messange'=>'produit supprimer!!'
        ]);

    }
}
