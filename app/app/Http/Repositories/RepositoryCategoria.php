<?php

namespace App\Http\Repositories;

use App\Models\Categoria;

class RepositoryCategoria extends Repository{
    
    private $rows = 10;

    public function __construct() {
        parent::__construct(new Categoria());
    }
    
    public function getRows() { return $this->rows; }
}
