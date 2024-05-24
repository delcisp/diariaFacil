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
        Schema::create('dados_diarista', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('foto_perfil')->nullable();
            $table->integer('idade');
            $table->string('sexo');
            $table->string('cpf', 11)->unique();
            $table->string('cep', 8)->index();
            $table->string('cidade');
            $table->string('estado');
            $table->string('rua');
            $table->string('descricao');
            $table->string('experiencias');
            $table->string('valor_hora');
            $table->string('valor_diaria');
            $table->string('dias_disponiveis');
            $table->string('disponivel_fds');
            $table->string('linkedin');
            $table->string('especialidades');
            $table->string('cartarecomendacao')->nullable();
            $table->string('telefone');
            $table->integer('segundo_telefone');
            $table->integer('pqcontratar');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
