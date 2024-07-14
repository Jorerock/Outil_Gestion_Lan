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
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string('First-name');
            $table->string('Last-name');
            $table->string('Url-twitch');
            $table->string('Url-Youtube');
            $table->longText('Description');

          //$table->string('DateSortie');
          //$table->foreignIdFor(App\Models\Vignette::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joueurs');
    }
};
