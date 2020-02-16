<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('host_id');
            $table->foreign('host_id')->references('id')->on('hosts');
            $table->enum('protocol', ['https://','http://']);
            $table->char('route', 255)->nullable();
            $table->char('method', 128);
            $table->mediumtext('body')->nullable();
            $table->mediumtext('header')->nullable();
            $table->boolean('sent');
            $table->ipAddress('requester_ip');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
