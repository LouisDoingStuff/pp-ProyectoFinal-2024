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
     *
     * @return ResponseInterface
     */
    public function guardarCliente()
    {
        $clientes = new ClientesModel();
        $datos = [
            'id_cliente' => $this->request->getPost('id_cliente'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'contrasena' => $this->request->getPost('contrasena'),

        ];
        print_r($datos);
        $clientes->insert($datos);
        return redirect()->route('ver_cl');
    }

    /**
     * ELIMINAR CLIENTE
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarCliente($id_cliente = null)
    {
        $clientes = new ClientesModel();
        $clientes->delete(['id_cliente' => $id_cliente]);
        return redirect()->route('ver_cl');
    }

    /**
     * BUSCAR CLIENTE
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarCliente($id_cliente = null)
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->where(['id_cliente' => $id_cliente])->first();
        return view('Clientes/form_modificar_cl', $datos);
    }

    /**
     * MODIFICAR CLIENTE
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarCliente()
    {
        $clientes = new ClientesModel();

        $datos = [
            'id_cliente' => $this->request->getPost('id_cliente'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'contrasena' => $this->request->getPost('contrasena'),
        ];
        $clientes->update($datos['id_cliente'], $datos);
        return redirect()->route('ver_cl');
    }
}
