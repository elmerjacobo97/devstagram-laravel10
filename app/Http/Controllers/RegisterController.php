<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
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

        // Acceder a los datos del formulario
        // dd($request);

        // Convertir el username a un slug
        $username = $request->input('username');
        $username = Str::slug($username);

        // Actualizar el valor en el objeto Request
        $request->merge(['username' => $username]);

        // Validar los datos
        //        $this->validate($request, [
        //            'name' => 'required|max:255|min:3|regex:/^[a-zA-Z\s]+$/',
        //            'required|unique:users|max:255|min:3',
        //            'email' => 'required|email|unique:users|max:255|min:3|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/',
        //            'password' => 'required|min:6|confirmed',
        //        ]);

        // Validación de datos
        $request->validate([
            'name' => 'required|max:255|min:3|regex:/^[a-zA-Z\s]+$/',
            'username' => 'required|unique:users|max:255|min:3',
            'email' => 'required|email|unique:users|max:255|min:3|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/',
            'password' => 'required|min:6|confirmed',
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Otra manera de crear el usuario
        // Crear el usuario
        // $user = new User();
        // $user->name = $request->input('name');
        // $user->username = $request->input('username');
        // $user->email = $request->input('email');
        // $user->password = Hash::make($request->input('password'));
        // $user->save();

        // Autenticar al usuario
        // Auth::login($user);

        // Otra forma de autenticar al usuario
    //    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
    //        // Autenticación exitosa, redirigir al destino deseado
    //        return redirect()->route('posts.index');
    //    } else {
    //        // Autenticación fallida, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
    //        return back()->withErrors(['email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.']);
    //    }

        // Otra forma de autenticar al usuario
        if (auth()->attempt(request()->only('email', 'password'))) {
            // Autenticación exitosa, redirigir al usuario
            return redirect()->route('profile.index');
        } else {
            // Autenticación fallida, redirigir de nuevo con un mensaje de error
            return back()->withErrors(['email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.']);
        }

        // Redirecciona a donde quieras después del registro
        // return redirect()->route('posts.index');
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
