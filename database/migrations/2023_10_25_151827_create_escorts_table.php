<?php

use App\Models\User;
use App\Models\Shape;
use App\Models\Ethnic;
use App\Models\Height;
use App\Models\Weight;
use App\Models\Quarter;
use App\Models\Membership;
use App\Models\Skin_color;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('escort_name');
            $table->string('whatsapp_number');
            $table->string("sexuality");
            $table->string("age");
            $table->string('description');
            $table->string("photo");
            $table->foreignIdFor(Quarter::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Ethnic::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->boolean('isCompleted')->default(0);
            $table->foreignIdFor(Shape::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Height::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Weight::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Skin_color::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
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
