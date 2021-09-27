<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('user_id');
            $table->string('manager_id')->nullable();
            $table->string('location_id')->nullable();
            $table->string('team_id')->nullable();

            $table->string('status')->default('pending');
            $table->string('priority')->default('nonurgent');
            $table->string('img_url')->nullable();

            $table->text('description');
            $table->text('comment')->nullable();
            $table->text('solution')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
