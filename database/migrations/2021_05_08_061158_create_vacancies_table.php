<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('institute_id');
            $table->foreign('institute_id')->references('id')->on('institutes')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('type');
            $table->string('salary')->nullable();
            $table->string('qualification')->nullable();
            $table->string('year')->nullable();
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
        Schema::dropIfExists('vacancies');
    }
}
