<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_tests', function (Blueprint $table) {
            $table->id();
            $table->integer('extroversion_score');
            $table->integer('agreeableness_score');
            $table->integer('conscientiousness_score');
            $table->integer('neuroticism_score');
            $table->integer('openness_score');
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
        Schema::dropIfExists('career_tests');
    }
}
