<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = clients::all();

        return response()->json($clients);
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
            // dd('hello welcome to store function');
            
            $client = clients::create([
                'nom'=>$request->nom, 
                'telephone'=>$request->telephone,
                'ville'=>$request->ville 
            ]);
            return  response()->json($client); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        
        $client= clients::findOrfail($id);
        

        return  response()->json($client);
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
            
            $client=clients::update(['nom'=>$request->nom, 'telephone'=>$request->telephone,'ville'=>$request->ville ]);
            return  response()->json($client); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $client= clients::findOrfail($id);
        $client->delete();

        return  response()->json([
            'messange'=>'client supprimer!!'
        ]); 
    }
}
