<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function signUp(Request $req){
        $req->validate([
            'cin' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', // Correction ici
        ]);

        // Hash du mot de passe
        $password_hash = Hash::make($req->password);
        
        $user = new User();
        $user->cin = $req->cin;
        $user->name = $req->name;
        $user->prenom = $req->prenom;
        $user->email = $req->email;
        $user->password = $password_hash;
        $user->save();

        return redirect('/login')->with('status', 'Inscription réussie avec succès!');
    }

    public function login(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Vérifier les identifiants
        if(Auth::attempt($req->only('email', 'password'))){
            // Régénérer l'ID de session pour sécuriser
            $req->session()->regenerate();

            return redirect('/list'); // Correction : ajout du point-virgule
        }
        
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect',
        ]);
    }

    public function loginforme(){
        return view('Authentification.login');
    }

    public function signUpforme(){
        return view('Authentification.signUp');
    }
}

