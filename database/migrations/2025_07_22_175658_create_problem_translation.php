<?php

use App\Enums\Languages;
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
        Schema::create('problem_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('problem_id')
            ->references('id')
            ->on('problems')->onDelete('cascade');
            $table->enum('language', array_map(fn($i) => $i->value, Languages::cases()));
            $table->text('erro');
            $table->string('description');//this field is for explanation your solution
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problem_translations');
    }
};
