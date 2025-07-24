<?php

use App\Enums\Programing_language;
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
        Schema::create('send_problems', function (Blueprint $table) {
            $table->id();
            $table->string('problem');//erro from problem your.
            $table->enum('language', array_map(fn($i) => $i->value, Programing_language::cases()));
            $table->string('description');//description of erro
            $table->text('code_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('send_problems');
    }
};
