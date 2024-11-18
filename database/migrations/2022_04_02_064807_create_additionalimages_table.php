<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionalimages', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('bu_name');
            $table->string('title');
            $table->string('heading');
            $table->string('url');
            $table->longText('details');
            $table->string('icon');
            $table->string('image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('additionalimages');
    }
}
