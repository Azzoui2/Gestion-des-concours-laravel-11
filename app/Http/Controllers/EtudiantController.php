<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Models\Etudiant; // Assurez-vous que le modèle est importé correctement

 class EtudiantController extends Controller
 {
     // Afficher la liste des étudiants
     public function listEtudiant()
     {
       // Récupérer tous les étudiants
       $cnc = Etudiant::all();

       // Passer les étudiants à la vue
       return view('etudiantes.liste', compact('cnc'));
     }

     // Afficher le formulaire d'ajout d'un étudiant
     public function ajouterEtudiant()
     {
         return view('etudiantes.ajouter');
     }

     // Traitement pour ajouter un étudiant
     public function ajouterEtudiant_traitement(Request $request)
    {
        // Validation des données
        $request->validate([
            'administration' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'datecnc' => 'required|date',
        ]);

        // Sauvegarde de l'étudiant
        Etudiant::create([
            'administration' => $request->administration,
            'site' => $request->site,
            'datecnc' => $request->datecnc,
        ]);

        return redirect('/ajouter')->with('success', 'Étudiant ajouté avec succès !');
    }

    public function  supprimerEtudiant ($id) {

        $cnc = Etudiant::findOrFail($id);
        $cnc->delete();

        return redirect('/etudiante')->with('success', 'Étudiant supprimé avec succès !');

    }

 }
