<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text'); 

            $table->foreignId('user_id')->constrained('users');
    
            $table->foreignId('category_id')->unsigned();

            $table->foreignId('level_id')->unsigned();
 
            $table->foreignId('city_id')->unsigned();

            $table->foreignId('type_id')->unsigned();

            $table->date('expired_at');
            $table->integer('views')->default('0');   
            $table->unsignedTinyInteger('status')->default('0');
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
        Schema::dropIfExists('jobs');
    }
}
