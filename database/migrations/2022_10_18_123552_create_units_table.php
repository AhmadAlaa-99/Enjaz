<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reality_id')->constrained('realties')->cascadeOnDelete();
            $table->foreignId('tenant_id')->constrained('tenants')->cascadeOnDelete();
            $table->enum('type', ['villa', 'apartment','two-floor','small','annexe']);
            $table->number('number')->unique();
            $table->number('size');
            $table->is_bool('furnished');
            $table->enum('furnished_mode', ['old', 'new'])->nullable();
            $table->boolval('kitchen_Cabinets');
            $table->number('condition_units');
            $table->string('condition_type');
            $table->string('Elecrtricity_number');
            $table->string('gas_number');
            $table->string('water_number');

            $table->string('El_current_reading')->nullable();
            $table->string('gas_current_reading')->nullable();
            $table->string('water_current_reading')->nullable();

            $table->enum('status', ['rented', 'empty'])->nullable();




            
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
        Schema::dropIfExists('units');
    }
}
