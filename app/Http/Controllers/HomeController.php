<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function iniciar()
    {
        return view('iniciar');
    }

    public function registrarse()
    {
        return view('registrarse');
    }

    public function gratis()
    {
        return view('gratis');
    }

    public function compu()
    {
        return view('gratis');
    }

    public function planes()
    {
        return view('planes');
    }

    public function refire_gana()
    {
        return view('refire-gana');
    }

    public function preguntas_frecuentes()
    {
        return view('preguntas-frecuentes');
    }

    public function instituciones()
    {
        return view('instituciones');
    }

    public function qinaya_school()
    {
        return view('qinaya-school');
    }

    public function qinaya_3play()
    {
        return view('qinaya-3play');
    }

    public function quienes_somos()
    {
        return view('quienes-somos');
    }

    public function cart()
    {
        return view('cart');
    }

    public function profile()
    {
        return view('profile');
    }

}
