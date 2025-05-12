<?

namespace App\Http\Repositories;

use App\Models\Declaracao;

class RepositoryDeclaracao extends Repository{
    
    private $rows = 10;

    public function __construct() {
        parent::__construct(new Declaracao());
    }
    
    public function getRows() { return $this->rows; }
}