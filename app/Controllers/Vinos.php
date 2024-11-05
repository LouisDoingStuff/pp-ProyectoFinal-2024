<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\VinosModel;

class Vinos extends BaseController{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM vinos");
        $data=['vinos'=>$query->getResult()];
        return view('Vinos/indexVn', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoVino():string
    {
        return view('Vinos/form_nuevo_vn');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarVino(){
        $vinos = new VinosModel();
        $datos = [
            'id_vino' => $this->request->getPost('id_vino'),
            'nombre'=> $this->request->getPost('nombre'),
            'anio'=> $this->request->getPost('anio'),
            'precio' => $this->request->getPost('precio'),
            'cantidad_stock'=> $this->request->getPost('cantidad_stock'),
            'id_categoria'=> $this->request->getPost('id_categoria'),
            'id_proveedor'=> $this->request->getPost('id_proveedor'),
            
        ];
        print_r($datos);
        $vinos->insert($datos);
        return redirect()->route('ver_vn');
    }

           /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarVino($id_vino = null){
        $vinos = new VinosModel();
        $vinos ->delete(['id_vino'=>$id_vino]);
        return redirect()->route('ver_vn');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarVino($id_vino = null)
    {
        $vinos = new VinosModel();
        $datos['datos']=$vinos->where(['id_vino'=>$id_vino])->first();
        return view('Vinos/form_modificar_vn',$datos);
    }

        /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarVino(){
        $vinos = new VinosModel();

        $datos=[
            'id_vino' => $this->request->getPost('id_vino'),
            'nombre'=> $this->request->getPost('nombre'),
            'anio'=> $this->request->getPost('anio'),
            'precio' => $this->request->getPost('precio'),
            'cantidad_stock'=> $this->request->getPost('cantidad_stock'),
            'id_categoria'=> $this->request->getPost('id_categoria'),
            'id_proveedor'=> $this->request->getPost('id_proveedor'),
        ];
        $vinos->update($datos['id_vino'],$datos);
        return redirect()->route('ver_vn');
    }
}