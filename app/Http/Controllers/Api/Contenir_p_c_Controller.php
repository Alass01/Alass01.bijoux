<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contenir_p_c;

class Contenir_p_c_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $touts = contenir_p_c::all();

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
            'total'=>'required',
            'commandes_id'=>'required',
            'produits_id'=>'required',
    
            ]);
            
            $tout=contenir_p_c::create([
                'quantite'=>$request->quantite,
                'total'=>$request->total, 
                'produits_id'=>$request->commandes_id,
                'total'=>$request->commandes_id 
            ]);
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
        $tout = contenir_p_c::findOrFail($id);

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
            'total'=>'required',
            'commandes_id'=>'required',
            'produits_id'=>'required',
    
            ]);
            
            $tout=contenir_p_c::update(['quantite'=>$request->quantite,'total'=>$request->total, 'produits_id'=>$request->commandes_id,'total'=>$request->commandes_id ]);
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
        // $tout = contenir_p_cs::destroy($id);

        // return response()->json($tout);

        $tout= contenir_p_c::findOrfail($id);
        $tout->delete();

        return  response()->json([
            'messange'=>' supprimer!!'
        ]); 
    }
}
