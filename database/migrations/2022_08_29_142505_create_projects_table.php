<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {                        
                        $table->text('Project_Ref');
                        $table->text('Country');
                        $table->text('Implementing_Office');
                        $table->text('Project_Title');
                        $table->text('Grant_amount_USD');
                        $table->text('Dates_from_GCF');
                        $table->text('Start_Date');
                        $table->text('Duration_months');
                        $table->text('End_Date');
                        $table->text('Readiness_or_NAP');
                        $table->text('Type_of_readiness');
                        $table->text('First_disbursement_amount');
                        $table->text('Status');
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
        Schema::dropIfExists('projects');
    }
}
