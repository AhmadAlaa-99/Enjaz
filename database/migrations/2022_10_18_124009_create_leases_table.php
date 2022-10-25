<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('leases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reco_number');
            $table->date('le_date');
            $table->date('st_rental_date');
            $table->enum('payment_method');
            $table->enum('type');
            $table->string('place');
            $table->date('end_rental_date');
            $table->string('org_id');
            $table->string('org_envoice_id');
            $table->string('tenant_id');
            $table->string('tenant_envoice_id');
            $table->string('broker_id');
            $table->string('reality_id');
            $table->string('unit_id');
            $table->string('owner_deeds_id');
            $table->string('financial_id');
            $table->string('payments_id');
            $table->string('broker_id');
            $table->string('commitments');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leases');
    }
}
