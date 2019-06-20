<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //index llama a la pagina principal de la vista users
    public function index()
    {
        if(request()->has('empty')){
            $equipo = [];
        } else {

        $equipo = array("portero"=>'Cech', "defensa"=>'Terry'
        , "medio"=>'Lampard', "delantero"=>'Drogba');

        }
        $titulo = 'Listado de Usuarios :)';
        /*
        return view('users',[
            'equipo'=> $equipo,
            'titulo' => 'Listado de Usuarios'
            ]);

        return view('users')
        ->with('equipo',$equipo)
        ->with('titulo','Listado de Usuarios.!!!');
        */
        return view('users',compact('equipo','titulo'));
    }

    public function show($id)
    {
      return view('user-show',compact('id'));
      //  return "Mostrando detalle del usuario: {$id}";
    }

    public function nuevo()
    {
        return "Mostrando del usuario";
    }



}
