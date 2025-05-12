<?

namespace App\Http\Repositories;

use App\Models\Curso;

class RepositoryCurso extends Repository{
    
    private $rows = 10;

    public function __construct() {
        parent::__construct(new Curso());
    }
    
    public function getRows() { return $this->rows; }
}