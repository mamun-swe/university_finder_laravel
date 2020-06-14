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
            $table->string('university_ranking');
            $table->string('ielts_score');
            $table->string('gre_score');
            $table->string('tofel_score');
            $table->string('pte_score');
            $table->string('bachelor_cgpa');
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
