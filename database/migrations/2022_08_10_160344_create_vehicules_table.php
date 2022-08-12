<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Model');
            $table->text('Price');
            $table->text('Year');
            $table->text('Condition');
            $table->text('Transmission type');
            $table->text('Color');
            $table->text('Bodytype');
            $table->text('Kilometers');
            $table->text('Description');
            $table->text('Location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
};
