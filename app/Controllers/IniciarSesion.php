<?php

namespace App\Controllers;
use App\Models\SesionesModel;

class IniciarSesion extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function iniciarSesion(){
        
        $txtUsuario=$this->request->getPost('txtUsuario');
        $txtPass=$this->request->getPost('txtPassword');
        //echo "<br>usuario: ". $txtUsuario;
        //echo "<br>contra: ". $txtPass; and $datos['id_estado']==1

        $usuario = new SesionesModel();
        $datos = $usuario->where('email',$txtUsuario)->where('contrasena',$txtPass)->first();
        if($datos){
            if($datos['id_estado']==1){
                session()->set(
                    [
                        'id'=>$datos['id_empleado'],
                        'email'=>$datos['email'],
                        'nombre'=>$datos['nombre'],
                        'tipo'=>$datos['id_tipo_usuario'],
                    ]
                );
                 if($datos['id_tipo_usuario']==1){
                    return view('inicio');
                 }elseif($datos['id_tipo_usuario']==2){
                    return view('paginaMissed');
                 }else{
                    return view('inicioC');
                 }
            }else{
                return view('paginaMissed');
            }

        }else{
            return view('datosIncorrectos');
        }
    }

    public function cerrarSesion(){
        session()->destroy();
        return redirect()->to(base_url('../'));
    }
    public function verMenu(){
        return view('inicio');
    }

    public function verInicio():string
    {
        return view('../views/inicio');
    }
    public function verInicioC():string
    {
        return view('../views/inicioC');
    }

    public function caratula():string
    {
        return view('../views/caratula');
    }

    public function datosIncorrectos():string
    {
        return view('../views/datosIncorrectos');
    }
}
