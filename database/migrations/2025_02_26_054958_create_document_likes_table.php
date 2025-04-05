<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('document_likes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('document_id')->constrained('documents')->onDelete('cascade');
        $table->timestamps();
        // This unique constraint ensures a user can like a PDF only once.
        $table->unique(['user_id', 'document_id']);
    });
}

public function down()
{
    Schema::dropIfExists('document_likes');
}

};
