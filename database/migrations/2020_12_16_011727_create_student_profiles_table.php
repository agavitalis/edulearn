<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->bigInteger('user_id');
            $table->string('phone');
            $table->enum('category', array('University', 'Secondary School'));
            $table->string('school_name');
            $table->string('level');
            $table->string('exp_year_of_graduation');
            $table->string('country');
            $table->string('state_of_orgin');
            $table->string('lga');
            $table->text('address');
           
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
        Schema::dropIfExists('student_profiles');
    }
}
