<?php

use App\Models\Escort;
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
        Schema::create('profile_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Escort::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
           $table->timestamp('visited_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_visits');
    }
};