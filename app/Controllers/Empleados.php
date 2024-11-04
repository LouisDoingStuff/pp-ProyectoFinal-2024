<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\EmpleadosModel;

class Empleados extends BaseController{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM empleados");
        $data=['empleados'=>$query->getResult()];
        return view('Empleados/indexEp', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoEmpleado():string
    {
        return view('Empleados/form_nuevo_ep');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarEmpleado(){
        $empleados = new EmpleadosModel();
        $datos = [
            'id_empleado' => $this->request->getPost('id_empleado'),
            'nombre'=> $this->request->getPost('nombre'),
            'apellido'=> $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'nt'=> $this->request->getPost('nt'),
            'direccion'=> $this->request->getPost('direccion'),
            'contrasena'=> $this->request->getPost('contrasena'),
            'id_tipo_usuario'=> $this->request->getPost('id_tipo_usuario'),
            'id_estado'=> $this->request->getPost('id_estado'),
            
        ];
        print_r($datos);
        $empleados->insert($datos);
        return redirect()->route('ver_ep');
    }

           /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarEmpleado($id_empleado = null){
        $empleados = new EmpleadosModel();
        $empleados ->delete(['id_empleado'=>$id_empleado]);
        return redirect()->route('ver_ep');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarEmpleado($id_empleado = null)
    {
        $empleados = new EmpleadosModel();
        $datos['datos']=$empleados->where(['id_empleado'=>$id_empleado])->first();
        return view('Empleados/form_modificar_ep',$datos);
    }

        /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarEmpleado(){
        $empleados = new EmpleadosModel();

        $datos=[
            'id_empleado' => $this->request->getPost('id_empleado'),
            'nombre'=> $this->request->getPost('nombre'),
            'apellido'=> $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'nt'=> $this->request->getPost('nt'),
            'direccion'=> $this->request->getPost('direccion'),
            'contrasena'=> $this->request->getPost('contrasena'),
            'id_tipo_usuario'=> $this->request->getPost('id_tipo_usuario'),
            'id_estado'=> $this->request->getPost('id_estado'),
        ];
        $empleados->update($datos['id_empleado'],$datos);
        return redirect()->route('ver_ep');
    }
}