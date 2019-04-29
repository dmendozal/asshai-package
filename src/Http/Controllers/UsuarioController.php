<?php

namespace Firstparcial\Asshai\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $result = User::paginate(2);
        return $result;
        /* return view('asshai::auth.login'); */     
   
    }

    public function test()
    {   
        dd("ESTO ES TEST");
        $result = User::all(); 
        return response().json($result);
         //return view('asshai::welcome');     
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->user_nom;
        $user->address = $request->user_dir;
        $user->email = $request->user_email;
        $user->telephone = $request->user_tel;
        $user->username = $request->user_username;
        $user->password = bcrypt($request->user_password);
        $user->idGrupo = 1; 
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->nombre = $request->user_nom;
        $user->direccion = $request->user_dir;
        $user->email = $request->user_email;
        $user->telefono = $request->user_tel;
        $user->username = $request->user_username;
        $user->idGrupo = $request ->user_group;  
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
