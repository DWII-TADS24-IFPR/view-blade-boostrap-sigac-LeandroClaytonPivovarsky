<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    /**
     * Get all of the comprovante for the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comprovantes()
    {
        return $this->hasMany(Comprovante::class);
    }

    /**
     * Get the curso that owns the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
