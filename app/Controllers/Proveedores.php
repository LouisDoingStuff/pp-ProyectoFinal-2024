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
     */

    /**
     * ELIMINAR PROVEEDOR
     */

    /**
     * BUSCAR PROVEEDOR
     */

    /**
     * MODIFICAR PROVEEDOR
     */
}
