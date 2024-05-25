<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlgorithmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algorithms', function (Blueprint $table) {
            $table->uuid('algorithm_id')->primary();
            $table->string('algorithm_name', 128);
            $table->string('algorithm_type', 128);
            $table->set('dataset_type', ['TXT', 'CSV', 'XLSX'])->default('TXT');
            $table->string('publication_url', 128)->nullable();
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
        Schema::dropIfExists('algorithms');
    }
}
