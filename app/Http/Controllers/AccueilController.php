<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\produits;
use App\Models\categories;
use App\Http\Controllers\Api\ProduitsController;
use App\Http\Controllers\Api\CategoriesController;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =categories::all();

        // $anneaus = categories::find(1);
        // $essentiels =categories::find(2);
        // $oridinaires =categories::find(3);

        // le get ramene tout les elements

        $anneaus = produits::where('categorie_id', '1')->get();
        $essentiels = produits::where('categorie_id', '2')->get();
        $oridinaires = produits::where('categorie_id', '3')->get();

        $mariages = produits::where('categorie_id', '4')->get();
        $manches = produits::where('categorie_id', '5')->get();
        $annivs = produits::where('categorie_id', '6')->get();
        // dd($oridinaires);


        $produits =produits::all();
       // faire passer une variable dans notre vue
        return view('accueil',)->with([
            'produits' => $produits,
            'categories'=>$categories,
            'anneaus' => $anneaus,
            'essentiels' => $essentiels,
            'oridinaires' => $oridinaires,
            
            'mariages' => $mariages,
            'manches' => $manches,
            'annivs' => $annivs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
