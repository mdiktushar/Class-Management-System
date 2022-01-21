<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->unique();
            $table->string('department')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('sex')->nullable();
            $table->string('semister')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('image')->unllable();
            $table->timestamps();
            
            //Foreign Key
            $table->foreign('id_number')
                    ->references('id_number')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
