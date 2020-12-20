<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrittenExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('written_exams', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('exam_id');
            $table->bigInteger('application_id');

            $table->integer('is_started');
            $table->string('start_time');

            $table->integer('is_finished');
            $table->string('finish_time');

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
        Schema::dropIfExists('written_exams');
    }
}
