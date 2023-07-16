<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contenir_p_s_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $touts = contenir_p_ss::all();

        return response()->json($touts);
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
            'quantite'=>'required',
            'stocks_id'=>'required',
            'produits_id'=>'required'
    
            ]);
            
            $tout=contenir_p_ss::create(['quantite'=>$request->quantite, 'produits_id'=>$request->commandes_id,'stocks_id'=>$request->stocks_id ]);
            return  response()->json($tout);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tout = contenir_p_ss::findOrFail($id);

        return response()->json($tout);
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
            'quantite'=>'required',
            'stocks_id'=>'required',
            'produits_id'=>'required',
    
            ]);
            
            $tout=contenir_p_ss::update(['quantite'=>$request->quantite, 'produits_id'=>$request->commandes_id,'stocks_id'=>$request->stocks_id ]);
            return  response()->json($tout);
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
        
        $tout= contenir_p_ss::findOrfail($id);
        $tout->delete();

        return  response()->json([
            'messange'=>' supprimer!!'
        ]); 
    }
}
