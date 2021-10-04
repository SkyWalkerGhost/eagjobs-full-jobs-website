<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('name')->nullable();

            $table->string('education', 300)->nullable();
            $table->string('salary')->nullable();
            $table->string('work_schedule')->nullable();
            $table->text('job_description')->nullable();
            $table->text('qualification_requirements')->nullable();

            $table->string('vacancy_type')->nullable();
            $table->decimal('amount_price', 10, 2)->default('0');
            
            $table->string('category_id')
                    ->foreign()
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
            
            $table->string('experience_id')
                    ->foreign()
                    ->references('id')
                    ->on('experiences')
                    ->onDelete('cascade');
            
            $table->string('language_id')
                    ->foreign()
                    ->references('id')
                    ->on('languages')
                    ->onDelete('cascade');
            
            $table->string('location_id')
                    ->foreign()
                    ->references('id')
                    ->on('locations')
                    ->onDelete('cascade');

            $table->string('company_id')
                    ->nullable()
                    ->foreign()
                    ->references('id')
                    ->on('companies')
                    ->onDelete('cascade');

            $table->enum('job_status', ['pending', 'approved'])->default('pending');
            
            $table->integer('vacancy_view')->default('0');
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
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
        Schema::dropIfExists('vacancies');
    }
}
