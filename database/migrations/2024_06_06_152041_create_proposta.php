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
        Schema::create('proposta', function (Blueprint $table) {

                $table->id();
                $table->unsignedBigInteger('users_id');
                $table->string('name_contratante');
                $table->foreignId('diarista_id')->constrained('dados_diarista')->onDelete('cascade');
                $table->string('local_limpeza');
                $table->string('cep_local');
                $table->date('data_limpeza');
                $table->string('qtd_horas_acordadas');
                $table->string('valor_acordado')->nullable();
                $table->string('contato');
                $table->string('segundo_contato');
                $table->string('status')->default('Pendente');
                $table->timestamps();
                $table->foreign('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposta');
    }
};
