<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('cpu_id');
            $table->unsignedBigInteger('ram_id');
            $table->unsignedBigInteger('disk_id');
            $table->unsignedBigInteger('system_id');
            $table->boolean('ic_ag');
            $table->boolean('dis_ag');
            $table->text('kayit');
            $table->text('reason');
            $table->text('description');
            $table->timestamps();

            $table->softDeletes();



            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->foreign('cpu_id')->references('id')->on('cpus')->onDelete('cascade');
            $table->foreign('ram_id')->references('id')->on('rams')->onDelete('cascade');
            $table->foreign('disk_id')->references('id')->on('disks')->onDelete('cascade');
            $table->foreign('system_id')->references('id')->on('systems')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
};
