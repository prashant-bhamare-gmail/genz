<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('company_name');
            $table->string('designation');
            $table->string('contact_number');
            $table->boolean('interested')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_registrations');
    }
};
