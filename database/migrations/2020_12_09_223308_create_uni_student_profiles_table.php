<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uni_student_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('phone');
            $table->text('address');
            $table->string('lga');
            $table->string('state');
            $table->bigInteger('country');
            $table->bigInteger('university');
            $table->bigInteger('level');
            $table->bigInteger('current_cgpa');
            $table->bigInteger('cgpa_scale');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uni_student_profiles');
    }
}
