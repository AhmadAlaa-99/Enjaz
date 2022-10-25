<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realties', function (Blueprint $table) {
            $table->id();

            $table->string('address');
            $table->enum('type', ['villa', 'building']);
            $table->enum('use', ['family', 'individually']);
            $table->number('roles');
            $table->number('units');
            $table->number('lifts');
            $table->number('parking');
            $table->foreignId('envoy_id')->constrained('org_envoies')->cascadeOnDelete();
            
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
        Schema::dropIfExists('realties');
    }
}
