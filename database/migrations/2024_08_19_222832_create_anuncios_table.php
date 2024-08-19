<?php

use App\Models\Categoria;
use App\Models\Estado;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('slug');
            $table->decimal('preco');
            $table->boolean('negociavel')->default(false);
            $table->text('descricao');
            $table->string('contato');
            $table->integer('views');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Estado::class);
            $table->foreignIdFor(Categoria::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios');
    }
};
