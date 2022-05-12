<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Models\Type_propriete;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Recuperation des donnees des proprietaires et des tables systemes
        $owners = Proprietaire::all();
        $propertiesTypes = Type_propriete::all();
        $neighbourhoods = Quartier::all();
        
        return view('propriete.ajout', compact('owners', 'propertiesTypes', 'neighbourhoods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asset = new Propriete();
        $asset->Adresse_propriete = $request->Adresse_propriete;
        $asset->Superficie = $request->Superficie;
        $asset->Nbre_etage = $request->Nbre_etage;
        $asset->proprietaire_id = $request->proprietaire_id;
        $asset->type_proprietes_id = $request->type_proprietes_id;
        $asset->quartier_id = $request->quartier_id;

        $asset->save();

        return redirect('/propriete/liste');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function show(Propriete $propriete)
    {
        $propriete = Propriete::all();
        
        return view('propriete.liste', [
            'proprietes' => $propriete 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function edit(Propriete $propriete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propriete $propriete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propriete $propriete)
    {
        //
    }
}
