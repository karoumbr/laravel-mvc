<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contrat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    //
    public function index()
    {
        //première méthode
        // $allclients = ['statique - client1', 'statique - client2', 'statique - client3'];
        // return View('index', ['clients' => $allclients]);

        //deuxième méthode - accès à la base de données mysql
        // $allclients = DB::table('clients')->get();
        // return View('index', ['clients' => $allclients]);

        //troisième méthode : utilisation de eloquent (ORM) : couche de base de données de laravel
        $allclients = Client::all();
        $allcontrats = Contrat::when(request('client_id'), function ($requete) {
            $requete->where('client_id', request('client_id'));
        })
            ->latest()
            ->get();
        return View(
            'index',
            ['clients' => $allclients],
            ['contrats' => $allcontrats]
        );
    }
}
