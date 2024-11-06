<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\FacturasModel;

class Facturas extends BaseController{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM factura");
        $data=['facturas'=>$query->getResult()];
        return view('Facturas/indexFt', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevaFactura():string
    {
        return view('Facturas/form_nueva_ft');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarFactura(){
        $facturas = new FacturasModel();
        $datos = [
            'id_factura' => $this->request->getPost('id_factura'),
            'cliente_id'=> $this->request->getPost('cliente_id'),
            'empleado_id'=> $this->request->getPost('empleado_id'),
            'nt' => $this->request->getPost('nt'),
            'direccion'=> $this->request->getPost('direccion'),
            'total'=> $this->request->getPost('total'),
            'fecha'=> $this->request->getPost('fecha'),
            
        ];
        print_r($datos);
        $facturas->insert($datos);
        return redirect()->route('ver_ft');
    }

           /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarFactura($id_factura = null){
        $facturas = new FacturasModel();
        $facturas ->delete(['id_factura'=>$id_factura]);
        return redirect()->route('ver_ft');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarFactura($id_factura = null)
    {
        $facturas = new FacturasModel();
        $datos['datos']=$facturas->where(['id_factura'=>$id_factura])->first();
        return view('Facturas/form_modificar_ft',$datos);
    }

        /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarFactura(){
        $facturas = new FacturasModel();

        $datos=[
            'id_factura' => $this->request->getPost('id_factura'),
            'cliente_id'=> $this->request->getPost('cliente_id'),
            'empleado_id'=> $this->request->getPost('empleado_id'),
            'nt' => $this->request->getPost('nt'),
            'direccion'=> $this->request->getPost('direccion'),
            'total'=> $this->request->getPost('total'),
            'fecha'=> $this->request->getPost('fecha'),
        ];
        $facturas->update($datos['id_factura'],$datos);
        return redirect()->route('ver_ft');
    }
}