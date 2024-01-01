<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnes; // Cette methode nous permet d'appeller notre fichier "Personnes" qui se trouve dans Models.
use Illuminate\Support\Facades\Auth; // La methode "Auth" nous permet de verifier les informations de connexion dans DB.

class ConnexionController extends Controller // La classe "ConnexionController" herite de la classe "Controller".
{
    // Cette fonction nous permet d'afficher la page d'accueil.
    public function page_accueil() {
        return view('accueil');
    }

    // Cette fonction nous permet d'afficher la page d'index contenant les liens dont la lien de connexion et d'inscription.
    public function index() {
        return view('index');
    }

    // Cette fonction nous permet d'afficher la page de connexion.
    public function form_connexion() {
        return view('connexion');
    }

    // Cette fonction nous permet d'afficher la page d'inscription.
    public function form_inscription() {
        return view('inscription');
    }

    // Cette fonction nous permet de faire le traitement du formulaire de connexion.
    public function traitement_form_connexion(Request $request) {
        Auth::attempt([
            'email' => ['required', 'email'],
            'password' => ['required', 'password']
        ]);

        return redirect('/accueil')->with('succes', 'Yes ! Connexion réussie.');
    }

    // Cette fonction nous permet de faire le traitement du formulaire d'inscription.
    public function traitement_form_inscription(Request $request) {
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required|unique:personnes',
            'email' => 'required|unique:personnes',
            'password' => 'required|min:8'
        ]);

        $personne = new Personnes();
        $personne->prenom = $request->input('prenom');
        $personne->nom = $request->input('nom');
        $personne->adresse = $request->input('adresse');
        $personne->telephone = $request->input('telephone');
        $personne->email = $request->input('email');
        $personne->password = bcrypt($request->input('password')); // "bcrypt" nous permet de cripter les mots de passe.
        $personne->save();

        // Ici on retourne la page de connexion si l'inscription a été bien effectuer.
        return redirect('/connexion')->with('message', 'Bravo ! Inscription réussie. Connectez-vous maintenant.');
    }
}
