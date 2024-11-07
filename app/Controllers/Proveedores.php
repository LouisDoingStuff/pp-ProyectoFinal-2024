<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProveedoresModel;

class Proveedores extends BaseController
{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM proveedores");
        $data = ['proveedores' => $query->getResult()];
        return view('Proveedores/indexPv', $data);
    }

    /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoProveedor(): string
    {
        return view('Proveedores/form_nuevo_pv');
    }

    /**
     * GUARDAR NUEVO PROVEEDOR
     *
     * @return ResponseInterface
     */
    public function guardarProveedor()
    {
        $proveedores = new ProveedoresModel();
        $datos = [
            'id_proveedor' => $this->request->getPost('id_proveedor'),
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'estado' => $this->request->getPost('estado'),

        ];
        print_r($datos);
        $proveedores->insert($datos);
        return redirect()->route('ver_pv');
    }

    /**
     * ELIMINAR PROVEEDOR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarProveedor($id_proveedor = null)
    {
        $proveedores = new ProveedoresModel();
        $proveedores->delete(['id_proveedor' => $id_proveedor]);
        return redirect()->route('ver_pv');
    }

    /**
     * BUSCAR PROVEEDOR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarProveedor($id_proveedor = null)
    {
        $proveedores = new ProveedoresModel();
        $datos['datos'] = $proveedores->where(['id_proveedor' => $id_proveedor])->first();
        return view('Proveedores/form_modificar_pv', $datos);
    }

    /**
     * MODIFICAR PROVEEDOR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarProveedor()
    {
        $proveedores = new ProveedoresModel();

        $datos = [
            'id_proveedor' => $this->request->getPost('id_proveedor'),
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'estado' => $this->request->getPost('estado'),
        ];
        $proveedores->update($datos['id_proveedor'], $datos);
        return redirect()->route('ver_pv');
    }
}
