<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Proteger el controlador, requiere autenticación
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        // Ahora $user contendrá el modelo User basado en el nombre de usuario de la URL.
        // Si no existe, Laravel automáticamente devolverá un error 404.

        return view('dashboard', [
            'user' => $user
        ]);
    }
}
