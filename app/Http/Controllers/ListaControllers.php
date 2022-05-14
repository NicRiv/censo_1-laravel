<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class ListaControllers extends Controller
{
    public function index() {
        if (Person::first() != null) {
            $lista = Person::all();
        }   else {
            $lista = 'vacio';
        }

        return view('lista', ['notificacion' => false, 'lista' => $lista]);
    }
}
