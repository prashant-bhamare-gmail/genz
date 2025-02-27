<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('x_twitter')->nullable();
            $table->string('portfolio')->nullable();
            $table->integer('reward_points')->default(0);
            $table->integer('used_reward_points')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['linkedin', 'instagram', 'facebook', 'x_twitter', 'portfolio', 'reward_points', 'used_reward_points']);
        });
    }
};
