<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->constrained('realties')->cascadeOnDelete();
            $table->string('t_name');
            $table->string('t_nationality');
            $table->date('t_date_birth');
            $table->string('t_ID_type');
            $table->string('t_ID_num');
            $table->string('t_phone');
            $table->string('t_email');

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
        Schema::dropIfExists('tenants');
    }
}
