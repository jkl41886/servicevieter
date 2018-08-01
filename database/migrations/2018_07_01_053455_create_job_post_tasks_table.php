<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_post_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('job_post_id');
            $table->string('details')->nullable();
            $table->timestamps();

            $table->foreign('job_post_id')->references('id')->on('job_posts')
                ->onCreate('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_post_tasks');
    }
}
