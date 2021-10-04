<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

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

                 
            $table->enum('payment_status', ['გადასახდელი', 'გადახდილია'])->default('გადასახდელი');
            
            $table->dateTime('payment_time')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
