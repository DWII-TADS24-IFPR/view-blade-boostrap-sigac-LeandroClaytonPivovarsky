<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{

    use SoftDeletes;
    /**
     * Get all of the aluno for the Turma
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunos(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }

    /**
     * Get the curso that owns the Turma
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
