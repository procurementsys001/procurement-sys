<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('collection_name');
            $table->string('refNo_1');
            $table->string('company_name_1');
            $table->string('file_path_1');
            $table->string('refNo_2');
            $table->string('company_name_2');
            $table->string('file_path_2');
            $table->string('refNo_3');
            $table->string('company_name_3');
            $table->string('file_path_3');
            $table->string('posted_by');
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
        Schema::dropIfExists('quotations');
    }
}
