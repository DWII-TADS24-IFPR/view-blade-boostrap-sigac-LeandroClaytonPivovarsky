<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprovante extends Model
{
    use SoftDeletes;

    /**
     * Get the categoria that owns the Comprovante
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Get the aluno that owns the Comprovante
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    /**
     * Get the user that owns the Comprovante
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the declaracoes for the Comprovante
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function declaracoes()
    {
        return $this->hasMany(Declaracao::class);
    }


}
