<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrewInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crew_information', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('street1');
            $table->string('street2');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('apt_no');
            $table->string('mailing_Street1');
            $table->string('mailing_Street2');
            $table->string('mailing_city');
            $table->string('mailing_state');
            $table->string('mailing_postal_code');
            $table->string('mailing_apt_no');
            $table->string('Make');
            $table->string('Model');
            $table->string('License_plate');
            $table->string('color');
            $table->string('em_name');
            $table->string('em_mail');
            $table->string('em_phone');
            $table->string('em_relations');
            $table->string('Citizenship');
            $table->string('Issueing_Authority');
            $table->string('Number');
            $table->string('Expiration');
            $table->string('passport_Issueing_Authority');
            $table->string('passport_Number');
            $table->string('passport_Expiration');
            $table->string('Marital_Status');
            $table->string('Number_of_Dependents');
            $table->string('Other_Dependents');
            $table->string('Other_Income');
            $table->string('Deductions');
            $table->string('Additional_amount_to_withold');
            $table->string('Exemption');
            $table->string('Business_Name');
            $table->string('DBA');
            $table->string('Federal_Tax_Classification');
            $table->string('Exemption_payee_code');
            $table->string('Exemption_from_Fatcha_reporting_code');
            $table->string('State_Tax_Marital_Status');
            $table->string('State_Tax_Number_of_dependents');
            $table->string('State_Tax_Additional_Allowances');
            $table->string('State_Tax_Additional_Withholding');
            $table->string('State_Tax_Total_Allowances');
            $table->string('military');
            $table->string('Protected');
            $table->string('Disabled');
            $table->string('Gender');
            $table->string('Ethnicity');
            $table->string('Conflict_of_interest');
            $table->string('Union_Member');
            $table->string('Hire_Status');
            $table->string('Employee_Status');
            $table->string('Start_Date');
            $table->string('Department');
            $table->string('Position');
            $table->string('Union');
            $table->string('OCC_Code');
            $table->text('Studio/Distant');
            $table->text('Daily/Week');
            $table->string('Paid');
            $table->string('Shirt_Size');
            $table->string('Rate');
            $table->string('Guaranteed_Hours');
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
        Schema::dropIfExists('crew_information');
    }
}
