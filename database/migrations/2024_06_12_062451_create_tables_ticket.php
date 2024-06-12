<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTicket extends Migration
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
            $table->foreignId('employes_id')->constrained()->onDelete('cascade'); //Pegawai Pembuat
            $table->foreignId('sla_id')->constrained()->onDelete('cascade');
            $table->foreignId('divisi_id')->constrained()->onDelete('cascade');
            $table->string('category')->nullable();
            $table->string('title');
            $table->text('description');
            $table->integer('status')->default(0); //0: open, 1: pending, 2: waiting, 3: in progress, 4: resolved, 5: closed
            $table->integer('priority')->default(0); //0: low, 1: medium, 2: high
            //pegawai yang mengerjakan
            $table->string('assigned_to')->nullable();
            $table->string('decription_assigned')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
