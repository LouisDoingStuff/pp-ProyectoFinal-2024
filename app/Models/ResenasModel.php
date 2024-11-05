<?php

namespace App\Models;

use CodeIgniter\Model;

class ResenasModel extends Model
{
    protected $table            = 'resenas';
    protected $primaryKey       = 'id_resena';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_resena', 'id_vino', 'id_cliente', 'puntuacion', 'comentario'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
}

?>