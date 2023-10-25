<?php

use App\Models\Escort;
use App\Models\User;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Escort::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->integer('stars');
			$table->string('comment');
			$table->boolean('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
