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
        Schema::create("discourse_connects", function (Blueprint $table) {
            $table->increments("id");
            $table->string("url", 128);
            $table->string("key", 32);
            $table->string("secret", 64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("discourse_connects");
    }
};
