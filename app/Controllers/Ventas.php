<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\VentasModel;

class Ventas extends BaseController{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM detalle_venta");
        $data=['ventas'=>$query->getResult()];
        return view('Ventas/indexVt', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevaVenta():string
    {
        return view('Ventas/form_nueva_vt');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarVenta(){
        $ventas = new VentasModel();
        $datos = [
            'id_detalle' => $this->request->getPost('id_detalle'),
            'id_venta'=> $this->request->getPost('id_venta'),
            'productoId'=> $this->request->getPost('productoId'),
            'cantidadCompra' => $this->request->getPost('cantidadCompra'),
            'precio'=> $this->request->getPost('precio'),
            
        ];
        print_r($datos);
        $ventas->insert($datos);
        return redirect()->route('ver_vt');
    }

           /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarVenta($id_detalle = null){
        $ventas = new VentasModel();
        $ventas ->delete(['id_detalle'=>$id_detalle]);
        return redirect()->route('ver_vt');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarVenta($id_detalle = null)
    {
        $ventas = new VentasModel();
        $datos['datos']=$ventas->where(['id_detalle'=>$id_detalle])->first();
        return view('Ventas/form_modificar_vt',$datos);
    }

        /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarVenta(){
        $ventas = new VentasModel();

        $datos=[
            'id_detalle' => $this->request->getPost('id_detalle'),
            'id_venta'=> $this->request->getPost('id_venta'),
            'productoId'=> $this->request->getPost('productoId'),
            'cantidadCompra' => $this->request->getPost('cantidadCompra'),
            'precio'=> $this->request->getPost('precio'),
        ];
        $ventas->update($datos['id_detalle'],$datos);
        return redirect()->route('ver_vt');
    }
}