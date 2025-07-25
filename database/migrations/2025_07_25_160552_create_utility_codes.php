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
        Schema::create('utility_codes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('erro', 255);
            $table->enum('language', array_map(fn($i) => $i->value, Programing_language::cases()));
            $table->binary('print_code');
            $table->text('code');
            $table->string('explanation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utility_codes');
    }
};
