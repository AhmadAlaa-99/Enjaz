<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantEnvoiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_envoies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenants')->constrained('tenant_id')->cascadeOnDelete();
            $table->string('tn_name');
            $table->string('tn_nationality');
            $table->date('tn_date_birth');
            $table->string('tn_ID_type');
            $table->string('tn_ID_num');
            $table->string('tn_phone');
            $table->string('tn_email');
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
        Schema::dropIfExists('tenant_envoies');
    }
}
