<?php

namespace App\Http\Repositories;

use App\Models\Comprovante;

class RepositoryComprovante extends Repository{
    
    private $rows = 10;

    public function __construct() {
        parent::__construct(new Comprovante());
    }
    
    public function getRows() { return $this->rows; }
}