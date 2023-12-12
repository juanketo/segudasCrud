<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('provedors', function (Blueprint $table) {
            $table->increments("id");
            $table->String("nombre");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('provedors');
    }
};
