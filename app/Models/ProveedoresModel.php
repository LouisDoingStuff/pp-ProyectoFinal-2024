<?php
    
namespace App\Models;

use CodeIgniter\Model;

class ProveedoresModel extends Model
{
    protected $table            = 'proveedores';
    protected $primaryKey       = 'id_proveedor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_proveedor', 'nombre', 'descripcion', 'estado'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}