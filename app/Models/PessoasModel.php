<?php

namespace App\Models;

use CodeIgniter\Model;

class PessoasModel extends Model
{
    protected $table            = 'pessoas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nome', 'email'];

    // Dates
    protected $useTimestamps = false;
   
}
