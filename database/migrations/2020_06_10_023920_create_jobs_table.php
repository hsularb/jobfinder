<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->longText('requirements')->nullable();
            $table->string('address')->nullable();
            $table->boolean('top_rated')->default(0)->nullable();
            $table->string('salary');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('location_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('type_id')->references('id')->on('job_types');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
