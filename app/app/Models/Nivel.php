<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nivel extends Model
{
    use SoftDeletes;
    
    protected $table = 'niveis';

    /**
     * Get all of the cursos for the Nivel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
