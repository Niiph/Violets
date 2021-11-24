<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('original_name')
                ->nullable($value = true);
            $table->longText('description')
                ->nullable($value = true);
            $table->unsignedInteger('breeder_id')
                ->nullable($value = true);
            $table->unsignedInteger('group_id')
                ->nullable($value = true);
            $table->string('image_path')
                ->nullable($value = true);
            $table->timestamps();
            $table->foreign('breeder_id')
                ->references('id')
                ->on('breeders')
                ->onDelete('set null');
            $table->foreign('group_id')
                ->references('id')
                ->on('groups')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants');
    }
}
