<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;
use App\Http\Requests\StorePersona;

class HomeController extends Controller
{

    public function index() {
        return view('home', ['notificacion' => false]);
    }

    public function agregar(StorePersona $req) {
        $persona = new Person;

        $persona->nombre = $req->nombre;
        $persona->apellido = $req->apellido;
        $persona->dni = $req->dni;
        $persona->nacimiento = $req->nacimiento;
        $persona->genero = $req->genero;

        if ($req->genero === 'Masculino' && $req->estadocivil !== 'Union libre') {
            $persona->estadocivil = $req->estadocivil . 'o';
        } elseif ($req->genero === 'Femenino' && $req->estadocivil !== 'Union libre') {
            $persona->estadocivil = $req->estadocivil . 'a';
        } elseif ($req->genero === 'Otro' && $req->estadocivil !== 'Union libre') {
            $persona->estadocivil = $req->estadocivil . 'x';
        } else {
            $persona->estadocivil = $req->estadocivil; 
        }
        
        $persona->provincia = $req->provincia;
        $persona->localidad = $req->localidad;
        $persona->email = $req->email;
        $persona->telefono = $req->telefono;

        $persona->save();
        
        return redirect()->route('home', ['notificacion' => true]);
    }
}
