<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { Schema::create('userprofile', function (Blueprint $table) {
        $table->id();
        $table->string('mobile');
        $table->string('address');
        $table->string('image');
        $table->integer('user_id')->unsigned();
        $table->timestamps();

        $table-> foreign('user_id') -> references('id') -> on('users');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
