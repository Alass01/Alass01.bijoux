<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\stocks;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = stocks::all();

        return response()->json($stocks);
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
            'libelle'=>'required',
            'produits_id'=>'required',
            'nom'=>'required',
            'ville'=>'required',
            'quantite'=>'required',
            'fournisseur_id'=>'required',
            'produit_id'=>'required'
    
    
            ]);

            $tout=contenir_p_ss::create([
                'quantite'=>$request->quantite, 
                'produits_id'=>$request->commandes_id,
                'stocks_id'=>$request->stocks_id 
            ]);

    
            $stock = stocks::create([
            'libelle'=>$request->libelle, 
            'produits_id'=>$request->produits_id,
            'quantite'=>$request,
            'fournisseur_id'=>$request
            ]);

            $stock = fournisseurs::create([
                'nom'=>$request,
                'ville'=>$request,
                'telephone'=>$request
            ]);    

        return  response()->json($stock); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock= stocks::findOrfail($id);

        return  response()->json($stock);
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
        'libelle'=>'required',
        'produits_id'=>'required',
        'nom'=>'required',
        'ville'=>'required',
        'quantite'=>'required',
        'fournisseur_id'=>'required',
        'produit_id'=>'required'


        ]);

        $stock = stocks::update([
        'libelle'=>$request->libelle, 
        'produits_id'=>$request->produits_id,
        'nom'=>$request,
        'ville'=>$request,
        'quantite'=>$request,
        'fournisseur_id'=>$request,
        'produit_id'=>$request
 ]);
        return  response()->json($stock); 
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $stock = stocks::destroy($id);
        // return  response()->json($stock); 

        $stock= stocks::findOrfail($id);
        $stock->delete();

        return  response()->json([
            'messange'=>'stock supprimer!!'
        ]);  

    }
}
