<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgEnvoiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_envoies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained('organization')->cascadeOnDelete();
            $table->string('name');
            $table->string('Nationality');
            $table->string('ID_type');
            $table->string('ID_num');
            $table->string('phone');
            $table->string('email');
            $table->string('representation_document_no');
            $table->string('re_do_type');
            $table->date('release_date');
            $table->date('expire_date');




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
        Schema::dropIfExists('org_envoies');
    }
}
