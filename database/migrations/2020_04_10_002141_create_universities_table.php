<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country');
            $table->string('university_name');
            $table->bigInteger('university_ranking');
            $table->bigInteger('ielts_score');
            $table->bigInteger('gre_score');
            $table->bigInteger('tofel_score');
            $table->bigInteger('bachelor_cgpa');
            $table->string('address');
            $table->text('website_link');
            $table->string('image');
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
        Schema::dropIfExists('universities');
    }
}
