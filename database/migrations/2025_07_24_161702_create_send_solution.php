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
        Schema::create('send_solutions', function (Blueprint $table) {
            $table->id();
            $table->enum('language', array_map(fn($i) => $i->value, Programing_language::cases()));
            $table->unsignedBigInteger('problem_id');
            $table->foreign('problem_id')->references('id')->on('problems')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();//debug test my function while i no implements auth
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('code_solution');
            $table->string('explanation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('send_solutions');
    }
};
