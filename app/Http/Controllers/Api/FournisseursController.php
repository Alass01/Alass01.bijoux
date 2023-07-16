<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fournisseurs;

class FournisseursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseur= fournisseur::all();

        return  response()->json($fournisseurs);
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
            'telephone'=>'required',
            'ville'=>'required',

    
            ]);
            
            $fournisseur = fournisseur::create(['nom'=>$request->nom, 'telephone'=>$request->telephone,'ville'=>$request->ville ]);
            return  response()->json($fournisseur); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseur= fournisseur::findOrfail($id);

        return  response()->json($fournisseur);
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
            'telephone'=>'required',
            'ville'=>'required',

    
            ]);
            
            $fournisseur = fournisseur::update(['nom'=>$request->nom, 'telephone'=>$request->telephone,'ville'=>$request->ville ]);
            return  response()->json($fournisseur); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $fournisseur = fournisseurs::destroy($id);
        // return  response()->json($fournisseur);
        $fournisseur= fournisseur::findOrfail($id);
        $fournisseur->delete();

        return  response()->json([
            'messange'=>'fournisseur supprimer!!'
        ]);  
    }
}
