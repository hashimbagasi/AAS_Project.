<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('Report_Id');
            $table->string('name');
            $table->string('related_to');
            $table->string('Report_body');
            $table->string('Report_Title');
            $table->string('Report_File');
            $table->string( 'File_path');
            $table->integer('Receiver_id');
            $table->integer('Sender_id');
            $table->timestamp('created_at');
            $table->timestamp('upadte_at');
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
        Schema::dropIfExists('reports');
    }
}
