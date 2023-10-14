<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Validar los datos
        $this->validate($request, [
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Si el usuario no existe
        if (!$user) {
            return back()->withErrors(['email' => 'El correo electrónico no está registrado.']);
        } 

        // Si el usuario existe pero la contraseña es incorrecta
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Tu contraseña es incorrecta.']);
        }

        // Comprobar si las credenciales son correctas
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('profile.index');
        } 

        // Otros errores
        return back()->withErrors(['messageError' => 'Las credenciales no son correctas']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
