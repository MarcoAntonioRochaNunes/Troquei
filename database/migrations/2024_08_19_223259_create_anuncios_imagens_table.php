<?php

use App\Models\Anuncio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anuncios_imagens', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->foreignIdFor(Anuncio::class)
                ->constrained()
                ->onDelete('cascade');
            $table->boolean('principal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios_imagens');
    }
};
