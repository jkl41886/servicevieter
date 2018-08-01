<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('files')->nullable();
            $table->string('inquiry_type')->nullable(); // assignment, cost_estimate, offer
            $table->string('offer_details')->nullable(); // verbindlich, unverbindlich, both
            $table->string('contract_type')->nullable(); // standard, express
            $table->string('work_start_type')->nullable(); // by_date, agreement
            $table->date('work_start_date')->nullable();
            $table->string('work_delivery_type')->nullable(); // by_date, agreement
            $table->string('work_delivery_date')->nullable();
            $table->string('payment_type')->nullable(); // fix, hourly, agreement
            $table->decimal('payment_hours')->default(0);
            $table->decimal('payment_budget')->default(0);
            $table->string('payout_type')->nullable(); // fix, agreement
            $table->string('status')->default('on_hold'); // on_hold, accepted, denied, blocked, removed
            $table->unsignedInteger('approved_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('user_id')->references('id')->on('users')
//                ->onUpdate('SET NULL')->onDelete('SET NULL');
        });

        Schema::create('job_post_category', function (Blueprint $table) {
            $table->unsignedInteger('job_post_id');
            $table->unsignedInteger('category_id');

            $table->foreign('job_post_id')->references('id')->on('job_posts')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('job_post_subcategory', function (Blueprint $table) {
            $table->unsignedInteger('job_post_id');
            $table->unsignedInteger('subcategory_id');

            $table->foreign('job_post_id')->references('id')->on('job_posts')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('subcategory_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('job_post_field', function (Blueprint $table) {
            $table->unsignedInteger('job_post_id');
            $table->unsignedInteger('field_id');

            $table->foreign('job_post_id')->references('id')->on('job_posts')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('field_id')->references('id')->on('fields')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('job_post_skill', function (Blueprint $table) {
            $table->unsignedInteger('job_post_id');
            $table->unsignedInteger('skill_id');

            $table->foreign('job_post_id')->references('id')->on('job_posts')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('skill_id')->references('id')->on('skills')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_post_skill');
        Schema::dropIfExists('job_post_field');
        Schema::dropIfExists('job_post_subcategory');
        Schema::dropIfExists('job_post_category');
        Schema::dropIfExists('job_posts');
    }
}
