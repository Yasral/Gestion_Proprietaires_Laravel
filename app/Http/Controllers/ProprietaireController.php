<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
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
        return view('proprietaire.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $owner = new Proprietaire();

        $owner->Nom_proprietaire = $request->Nom_proprietaire;
        $owner->Prenom_proprietaire = $request->Prenom_proprietaire;
        $owner->Date_naissance = $request->Date_naissance;
        $owner->Lieu_naissance = $request->Lieu_naissance;
        $owner->code_piece_identite = $request->code_piece_identite;
        $owner->Numero_piece_identite = $request->Numero_piece_identite;
        $owner->Adresse = $request->Adresse;
        $owner->Email = $request->Email;
        $owner->genre = $request->genre;
        $owner->civilite = $request->civilite;

        $owner->save();

        return redirect('/proprietaire/liste');
    }

    public function updateDetail($id)
    {
        $owner = Proprietaire::find($id);
        return view('proprietaire.modificationDetail', compact('owner'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaire)
    {
        $proprietaire = Proprietaire::all();
        return view('proprietaire.liste', [
            'proprietaires' => $proprietaire
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $owner = Proprietaire::find($id);
        $owner->Nom_proprietaire = $request->Nom_proprietaire;
        $owner->Prenom_proprietaire = $request->Prenom_proprietaire;
        $owner->Date_naissance = $request->Date_naissance;
        $owner->Lieu_naissance = $request->Lieu_naissance;
        $owner->code_piece_identite = $request->code_piece_identite;
        $owner->Numero_piece_identite = $request->Numero_piece_identite;
        $owner->Adresse = $request->Adresse;
        $owner->Email = $request->Email;
        $owner->genre = $request->genre;
        $owner->civilite = $request->civilite;
        $owner->update();

        return redirect('/proprietaire/liste');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proprietaire $proprietaire, $id)
    {
        $proprietaire = Proprietaire::find($id);
        $proprietaire->delete();
        return redirect('/proprietaire/liste');
    }
}
