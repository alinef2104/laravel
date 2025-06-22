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
        Schema::create('anuncio', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->decimal('preco', 10, 2);
            $table->date('data_publicacao');
            $table->timestamps();

            $table->unsignedBigInteger('proprietario_id');
            $table->foreign('proprietario_id')->references('id')->on('proprietario');

            $table->unsignedBigInteger('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculo');
            $table->unique('veiculo_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncio');
    }
};

