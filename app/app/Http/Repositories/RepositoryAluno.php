<?php

namespace App\Http\Repositories;

use App\Models\Aluno;

class RepositoryAluno extends Repository{

    private $rows = 10;

    public function __construct() {
        parent::__construct(new Aluno());
    }
    
    public function getRows() { return $this->rows; }
}