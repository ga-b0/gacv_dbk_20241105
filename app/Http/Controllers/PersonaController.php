<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PersonaController extends Controller
{
    public function createUser(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users,email',
            'password' => 'required|string|min:8|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $persona = new Persona();
        $persona->nombre = $req->name;
        $persona->apellido = $req->apellido ?? ''; 
        $persona->fecha_nacimiento = $req->fecha_nacimiento ?? null; 
        $persona->direccion = $req->direccion ?? ''; 

        $persona->save();
        $accessToken = 'dummy-token';  
        $tokenType = 'bearer';  

        return response()->json([
            'success' => true,
            'errors' => null, 
            'data' => [
                'access_token' => $accessToken,
                'token_type' => $tokenType,
            ],
            'msg' => 'Usuario creado exitosamente',
            'count' => 1,
        ], 201);
    }
}
