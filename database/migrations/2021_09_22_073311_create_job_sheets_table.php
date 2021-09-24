<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_sheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('action_id');
            $table->string('title');
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('ticket_date')->nullable();
            $table->timestamp('deadline_date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('job_sheets');
    }
}
