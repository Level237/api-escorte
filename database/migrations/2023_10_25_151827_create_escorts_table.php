<?php

use App\Models\Membership;
use App\Models\Country;
use App\Models\Quarter;
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
        Schema::create('escorts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->string('whatsapp_number');
            $table->string("sexuality");
            $table->string("year_of_birth")->nullable();
            $table->string('description')->nullable();
            $table->string("photo");
            $table->foreignIdFor(Quarter::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->boolean('isCompleted')->default(0);
            $table->bigInteger("body_shape_id")->nullable();
            $table->boolean("isVerified")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escorts');
    }
};
