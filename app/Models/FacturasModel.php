<?php

namespace App\Models;

use CodeIgniter\Model;

class FacturasModel extends Model
{
    protected $table            = 'factura';
    protected $primaryKey       = 'id_factura';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_factura', 'cliente_id', 'empleado_id', 'nt', 'direccion', 'total','fecha'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
}