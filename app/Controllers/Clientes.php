<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;

class Clientes extends BaseController
{

    /**
     * DATOS DE LA TABLA
     * @return ResponseInterface
     */
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM clientes");
        $data = ['clientes' => $query->getResult()];
        return view('Clientes/indexCl', $data);
    }

    /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoCliente(): string
    {
        return view('Clientes/form_nuevo_cl');
    }

    /**
     * GUARDAR NUEVO CLIENTE
     */

    /**
     * ELIMINAR CLIENTES
     */

    /**
     * BUSCAR CLIENTES
     */

    /**
     * MODIFICAR CLIENTES
     */
}
