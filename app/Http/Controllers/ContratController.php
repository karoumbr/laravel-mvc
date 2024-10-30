<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    //
    public function afficher($contratId)
    {
        // $allclients = Client::all();
        $contrat = Contrat::find($contratId);
        return View('contrat', ['uncontrat' => $contrat]);
    }
}
