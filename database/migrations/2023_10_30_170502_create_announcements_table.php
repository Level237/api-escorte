<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Town;
use App\Models\AnnouncementCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->foreignIdFor(Town::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->foreignIdFor(AnnouncementCategory::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->boolean('status')->default('0');
            $table->boolean('type');
            $table->string('title');
            $table->string('description');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
