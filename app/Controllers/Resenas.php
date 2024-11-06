<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ResenasModel;

class Resenas extends BaseController{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM resenas");
        $data=['resenas'=>$query->getResult()];
        return view('Resenas/indexRs', $data);
        
    }

        /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function indexC()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM resenas");
        $data=['resenas'=>$query->getResult()];
        return view('Resenas/indexRC', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevaResena():string
    {
        return view('Resenas/form_nueva_rs');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarResena(){
        $resenas = new ResenasModel();
        $datos = [
            'id_resena' => $this->request->getPost('id_resena'),
            'id_vino'=> $this->request->getPost('id_vino'),
            'id_cliente'=> $this->request->getPost('id_cliente'),
            'puntuacion' => $this->request->getPost('puntuacion'),
            'comentario'=> $this->request->getPost('comentario'),
            
        ];
        print_r($datos);
        $resenas->insert($datos);
        return redirect()->route('ver_rs');
    }

           /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarResena($id_resena = null){
        $resenas = new ResenasModel();
        $resenas ->delete(['id_resena'=>$id_resena]);
        return redirect()->route('ver_rs');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarResena($id_resena = null)
    {
        $resenas = new ResenasModel();
        $datos['datos']=$resenas->where(['id_resena'=>$id_resena])->first();
        return view('Resenas/form_modificar_rs',$datos);
    }

        /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarResena(){
        $resenas = new ResenasModel();

        $datos=[
            'id_resena' => $this->request->getPost('id_resena'),
            'id_vino'=> $this->request->getPost('id_vino'),
            'id_cliente'=> $this->request->getPost('id_cliente'),
            'puntuacion' => $this->request->getPost('puntuacion'),
            'comentario'=> $this->request->getPost('comentario'),
        ];
        $resenas->update($datos['id_resena'],$datos);
        return redirect()->route('ver_rs');
    }

    //////////////////////////////////////////
            /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevaResenaC():string
    {
        return view('Resenas/form_nueva_rsc');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarResenaC($id_resena = null)
    {
        $resenas = new ResenasModel();
        $datos['datos']=$resenas->where(['id_resena'=>$id_resena])->first();
        return view('Resenas/form_modificar_rsc',$datos);
    }

        /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarResenaC(){
        $resenas = new ResenasModel();
        $datos = [
            'id_resena' => $this->request->getPost('id_resena'),
            'id_vino'=> $this->request->getPost('id_vino'),
            'id_cliente'=> $this->request->getPost('id_cliente'),
            'puntuacion' => $this->request->getPost('puntuacion'),
            'comentario'=> $this->request->getPost('comentario'),
            
        ];
        print_r($datos);
        $resenas->insert($datos);
        return redirect()->route('ver_rsC');
    }

           /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarResenaC(){
        $resenas = new ResenasModel();

        $datos=[
            'id_resena' => $this->request->getPost('id_resena'),
            'id_vino'=> $this->request->getPost('id_vino'),
            'id_cliente'=> $this->request->getPost('id_cliente'),
            'puntuacion' => $this->request->getPost('puntuacion'),
            'comentario'=> $this->request->getPost('comentario'),
        ];
        $resenas->update($datos['id_resena'],$datos);
        return redirect()->route('ver_rsC');
    }

}