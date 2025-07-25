<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url')->nullable();
            $table->string('descricao');
            $table->float('horas_in');
            $table->string('status')->default(0);     // (0)SOLICITADO / (1)DEFERIDO / (-1)INDEFERIDO
            $table->string('comentario')->nullable();
            $table->float('horas_out')->default(0);

            $table->softDeletes();
            $table->timestamps();

            $table->foreignId('categoria_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
