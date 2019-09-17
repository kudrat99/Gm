<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('its', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('tabel');
            $table->text('name');
            $table->text('doljn');
            $table->text('d1');
            $table->text('d2');
            $table->text('d3');
            $table->text('d4');
            $table->text('d5');
            $table->text('d6');
            $table->text('d7');
            $table->text('d8');
            $table->text('d9');
            $table->text('d10');
            $table->text('d11');
            $table->text('d12');
            $table->text('d13');
            $table->text('d14');
            $table->text('d15');
            $table->text('fakt');
            $table->text('otpusk');
            $table->text('bolezn');
            $table->text('razrad');
            $table->text('progul');
            $table->text('vixodn');
            $table->text('gosob');
            $table->text('komand');
            $table->text('vsego');
            $table->text('osnovan');
            $table->text('sverxuroch');
            $table->text('vsegoch');
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
        Schema::dropIfExists('its');
    }
}
