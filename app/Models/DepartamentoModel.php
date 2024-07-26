<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentoModel extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'cod_depto';
    protected $allowedFields = [
        'cod_depto',
        'nombre_depto',
        'cod_region'
    ];
} 