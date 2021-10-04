<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->string('order_id')
                    ->nullable()
                    ->foreign()
                    ->references('id')
                    ->on('vacancies')
                    ->onDelete('cascade');
            
            $table->string('vacancy_id')
                    ->nullable()
                    ->foreign()
                    ->references('id')
                    ->on('vacancies')
                    ->onDelete('cascade');
            
            $table->string('company_id')
                    ->nullable()
                    ->foreign()
                    ->references('id')
                    ->on('companies')
                    ->onDelete('cascade');

            $table->string('payment_id')
                    ->nullable()
                    ->foreign()
                    ->references('id')
                    ->on('payments')
                    ->onDelete('cascade');
            
            $table->dateTime('invoice_send_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
