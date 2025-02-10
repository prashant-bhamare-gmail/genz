<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Event Title
            $table->text('description')->nullable(); // Event Description
            $table->string('image')->nullable(); // Event Image URL
            $table->date('event_date'); // Event Date
            $table->time('event_time'); // Event Time
            $table->string('location'); // Event Location
            $table->integer('capacity')->nullable(); // Max Attendees
            $table->decimal('price', 10, 2)->default(0.00); // Event Price
            $table->string('organizer')->nullable(); // Organizer Name
            $table->string('category')->nullable(); // Event Category
            $table->enum('status', ['upcoming', 'next', 'completed'])->default('upcoming');
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down() {
        Schema::dropIfExists('events');
    }
};
