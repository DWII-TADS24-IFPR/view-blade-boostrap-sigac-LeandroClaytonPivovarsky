<?

namespace App\Http\Repositories;

use App\Models\Turma;

class RepositoryTurma extends Repository{
    
    private $rows = 10;

    public function __construct() {
        parent::__construct(new Turma());
    }
    
    public function getRows() { return $this->rows; }
}