<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHajjStepsTable extends Migration
{
    public function up(): void
    {
        Schema::create('hajj_steps', function (Blueprint $table) {
            $table->id();
            $table->integer('step_number');
            $table->string('title_bn');
            $table->text('description_bn');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hajj_steps');
    }
}