<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\commandes;
use App\Models\clients;
use App\Models\contenir_p_c;
use App\Models\produits;


class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = commandes::all();

        return response()->json($commandes);
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
            'nom'=>'required',
            'ville'=>'required',
            'telephone'=>'required',
            'quantite'=>'required',
            'produit_id'=>'required'

        ]);

        $produit = produits::find($request->produit_id);
        if(!$produit){
            return response()->json([
                "message"=>"Desole, produit introuvable"
            ]);
        } 

        $client = clients::create([
            'nom'=>$request->nom, 
            'telephone'=>$request->telephone,
            'ville'=>$request->ville 
        ]);

        $commande = commandes::create([
            'libelle'=>$request->libelle, 
            'clients_id'=>$client->id,
        ]);

        $total = intval($request->quantite) * intval($produit->prix);

        $relation= contenir_p_c::create([
            'quantite'=>intval($request->quantite),
            'total'=> $total,
            'commandes_id'=> $commande->id,
            'produits_id'=> $produit->id,
        ]);
       

        return  response()->json([
            "Client"=>$client,
            "commande"=>$commande,
            "relation"=> $relation
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
        $commande = commandes::findOrFail($id);

        return response()->json($commande);
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
            // 'clients_id'=>'required',
            'nom'=>'required',
            'ville'=>'required',
            'telephone'=>'required',
            'quantite'=>'required',
            'produit_id'=>'required'

        ]);
       
        $client = clients::update([
            'nom'=>$request->nom, 
            'telephone'=>$request->telephone,
            'ville'=>$request->ville 
        ]);

        $commande = commandes::update([
            'libelle'=>$request->libelle, 
            'clients_id'=>$client->id,
            
        ]);

        $tout=contenir_p_c::update([
            'clients_id'=>$client->id,
            'commandes_id'=>$commande->id,
            'quantite'=>$request->quantite,
            'total'=>$request->commandes_id ]);
            

        return  response()->json([
            $client,
            $commande,
            $tout

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
        
        $commande = commandes::destroy($id);

        return  response()->json([
            'messange'=>'commande supprimer!!'
        ]);

        
    }
}
