<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_views', function (Blueprint $table) {
            $table->id();
            $table->string('view')->default('1');

            $table->string('vacancy_id')
                    ->nullable()
                    ->foreign()
                    ->references('id')
                    ->on('vacancies')
                    ->onDelete('cascade');
                    
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
        Schema::dropIfExists('vacancy_views');
    }
}
