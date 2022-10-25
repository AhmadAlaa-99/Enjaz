<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_statements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lease_id')->constrained('leases')->cascadeOnDelete();
            $table->string('prusit_amount');
            $table->string('annual_gas');
            $table->string('annual_electricity');
            
            $table->string('annual_water');
            $table->string('annual_parking');
            $table->string('annual_rent');
            $table->string('num_parking');
            $table->enum('payment_cycle',['monthly','annual','quarterly','midterm']);
            $table->string('recurring_rent_payment');
            $table->string('last_rent_payment');
            $table->string('num_rental_payments');
            $table->string('Total');
            $table->string('payment_channels');
            $table->string('deposit_amount');
            $table->string('violation_amount');
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
        Schema::dropIfExists('financial_statements');
    }
}
