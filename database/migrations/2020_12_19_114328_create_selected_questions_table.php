<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_questions', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->text('question');
            $table->text('option_a');
            $table->text('option_b');
            $table->text('option_c');
            $table->text('option_d');
            $table->text('answer');
            $table->text('student_answer')->nullable();

            $table->bigInteger('question_id');
            $table->bigInteger('exam_id');
            $table->bigInteger('written_exam_id');
            $table->bigInteger('user_id');
            $table->boolean('is_active')->default(true);
            
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
        Schema::dropIfExists('selected_questions');
    }
}
