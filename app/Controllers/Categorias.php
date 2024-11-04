<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoriasModel;

class Categorias extends BaseController{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM categorias");
        $data=['categoria'=>$query->getResult()];
        return view('Categorias/index', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevaCategoria():string
    {
        return view('Categorias/form_nueva_cat');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarCategoria(){
        $categorias = new CategoriasModel();
        $datos = [
            'id_categoria' => $this->request->getPost('id_categoria'),
            'nombre'=> $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion'),
            
        ];
        print_r($datos);
        $categorias->insert($datos);
        return redirect()->route('ver_cat');
    }

           /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarCategoria($id_categoria = null){
        $categorias = new CategoriasModel();
        $categorias ->delete(['id_categoria'=>$id_categoria]);
        return redirect()->route('ver_cat');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarCategoria($id_categoria = null)
    {
        $categorias = new CategoriasModel();
        $datos['datos']=$categorias->where(['id_categoria'=>$id_categoria])->first();
        return view('Categorias/form_modificar_cat',$datos);
    }

        /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarCategoria(){
        $categorias = new CategoriasModel();

        $datos=[
            'id_categoria' => $this->request->getPost('id_categoria'),
            'nombre'=> $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion'),
        ];
        $categorias->update($datos['id_categoria'],$datos);
        return redirect()->route('ver_cat');
    }

            /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
}


