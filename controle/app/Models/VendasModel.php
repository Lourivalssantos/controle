<?php

namespace App\Models;

use CodeIgniter\Model;

class VendasModel extends Model
{
    protected $table = 'vendas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome_prod', 'quant', 'valor', 'comprador'];

    // Outros métodos, se necessário
}
