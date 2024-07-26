<?php

namespace App\Models;

use CodeIgniter\Model;

class municipiosModel extends Model{

    protected $table = 'municipios';
    protected $primaryKey = 'cod_muni';
    protected $allowedFields = [
        'cod_muni',
        'nombre_municipio',
        'cod_depto'
    ];

} 