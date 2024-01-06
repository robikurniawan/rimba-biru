<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partnert_id');
            $table->string('title');
            $table->integer('start_year')->nullable();
            $table->integer('end_year')->nullable();
            $table->text('desc')->nullable();
            $table->string('location')->nullable();
            $table->string('cover')->nullable();
            $table->enum('status',['planning','onprogress','done']);
            $table->foreignId('user_id');
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
        Schema::dropIfExists('projects');
    }
}
