<?

namespace App\Http\Repositories;

use App\Models\Documento;

class RepositoryDocumentos extends Repository{
    
    private $rows = 10;

    public function __construct() {
        parent::__construct(new Documento());
    }
    
    public function getRows() { return $this->rows; }
}