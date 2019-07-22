<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('service_id')->unsigned()->nullable()->default(null);
            // $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('set null');
            $table->string('name');
            $table->string('sub_heading');
            $table->string('sub_heading_description');
            $table->text('description');
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('packages');
    }
}
