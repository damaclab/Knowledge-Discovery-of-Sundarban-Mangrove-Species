<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->uuid('publication_id')->primary();
            $table->string('publication_title', 1000);
            $table->string('publication_type', 64);
            $table->string('domain', 128)->nullable();
            $table->string('authors', 128);
            $table->string('journal', 128);
            $table->integer('year_of_publication');
            $table->string('publication_url', 128);
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
        Schema::dropIfExists('publications');
    }
}
