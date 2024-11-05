<?php

namespace App\Models;

use CodeIgniter\Model;

class VinosModel extends Model
{
    protected $table            = 'vinos';
    protected $primaryKey       = 'id_vino';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_vino', 'nombre', 'anio', 'precio', 'cantidad_stock', 'id_categoria','id_proveedor'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
}