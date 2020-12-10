<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_student_profiles', function (Blueprint $table) {
          
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('phone');
            $table->text('address');
            $table->string('lga');
            $table->string('state');
            $table->bigInteger('country');
            $table->bigInteger('school');
            $table->bigInteger('class');
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
        Schema::dropIfExists('sec_student_profiles');
    }
}
