<?php

use App\Models\Membership;
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
            $table->string('whatsapp_number');
            $table->string("sexuality");
            $table->string("year_of_birth");
            $table->string('description');
            $table->string("photo");
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
