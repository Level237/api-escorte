<?php

use App\Models\Escort;
use App\Models\Skin_color;
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
        Schema::create('escort_physicals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Escort::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Skin_color::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->bigInteger("height_id")->nullable();
            $table->bigInteger("weight_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escort_physicals');
    }
};
