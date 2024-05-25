<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasets', function (Blueprint $table) {
            $table->uuid('dataset_id')->primary();
            $table->uuid('uploader_id');
            $table->string('dataset_type', 167);
            $table->string('dataset_name', 167);
            $table->string('dataset_path', 167);
            $table->integer('dataset_size')->default('0');
            $table->string('created_at', 64);
            $table->string('updated_at', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datasets');
    }
}
