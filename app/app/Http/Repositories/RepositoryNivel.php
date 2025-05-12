<?

namespace App\Http\Repositories;

use App\Models\Nivel;

class RepositoryNivel extends Repository{
    
    private $rows = 10;

    public function __construct() {
        parent::__construct(new Nivel());
    }
    
    public function getRows() { return $this->rows; }

}