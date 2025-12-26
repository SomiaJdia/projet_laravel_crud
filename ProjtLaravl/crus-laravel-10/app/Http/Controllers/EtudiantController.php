<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function Liste_Etudiant(){
        $etudiants=Etudiant::all();
        return view('Etudiant.list',compact('etudiants'));
    }

    public function Ajouter_Etudiant(){
        return view ('Etudiant.Ajouter');
    }
    public function Ajouter_Etudiant_trait(Request $req){
        // Traitement du formulaire d'ajout d'étudiant
        $req->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:etudiants,email',
        ]);
        $etudiant=new Etudiant();
        $etudiant->nom=$req->nom;
        $etudiant->prenom=$req->prenom;
        $etudiant->email=$req->email;
        $etudiant->save();
        return redirect('/Ajouter')->with('status','Étudiant ajouté avec succès!');
    }
    public function modifier($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('Etudiant.modifier', compact('etudiant'));
    }

    // Traiter la modification d'un étudiant
    public function modifierTrait(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:etudiants,email,' . $id,
        ]);

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->save();

        return redirect('/list')->with('success', 'Étudiant modifié avec succès!');
    }

    // Supprimer un étudiant
    public function supprimer($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return redirect('/list')->with('success', 'Étudiant supprimé avec succès!');
    }
}
