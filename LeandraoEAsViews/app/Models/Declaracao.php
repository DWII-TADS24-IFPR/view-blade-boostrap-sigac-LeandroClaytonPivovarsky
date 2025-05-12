<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Declaracao extends Model
{
    use SoftDeletes;

    /**
     * Get the aluno that owns the Declaracao
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    /**
     * Get the comprovante that owns the Declaracao
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comprovante()
    {
        return $this->belongsTo(Comprovante::class);
    }

    
}
