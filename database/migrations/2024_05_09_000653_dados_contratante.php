<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dados_contratante', function (Blueprint $table) {
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
            $table->string('telefone');
            $table->integer('segundo_telefone');
            $table->string('tiporesidencia');
            $table->string('tamanhoresidencia');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        //
    }
};
