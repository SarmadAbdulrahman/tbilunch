<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.  ACCOUNT TYPE   Credit card   Currency Legal Status 
     *  PERSONAL DETAILS  Purpose  Source of Income   Other Sources of Income
     * Total Monthly Income  Monthly estimate
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->integer('appoitment_id')->default(0);
            $table->integer('baranch_id')->default(0);
            $table->integer('joint_accounts')->default(0);
            $table->integer('count_joint_accounts')->default(0);
            $table->integer('account_type_id')->default(0);
            $table->integer('Credit_type_id')->default(0);
            $table->integer('Currency_id')->default(0);
            $table->integer('Legal_Status_id')->default(0);
            $table->integer('personal_details_id')->default(0);
            $table->integer('gender_id')->default(0);
            $table->string('Purpose')->default(0);
            $table->integer('Source_of_income_id')->default(0);
            $table->string('Other_Sources_of_Income')->default(0);
            $table->integer('Total_Monthly_Income_id')->default(0);
            $table->string('Monthly_estimate')->default(0);
            $table->string('Yearly_estimate')->default(0);




            $table->string('First_Name')->default(0); 
            $table->string('Middle_Name_Initials')->default(0); 
            $table->string('Family_Name')->default(0); 
            $table->string('Full_Mother_Name')->default(0); 
            $table->string('Marital_Status')->default(0); // Spouse name

            $table->string('Spouse_name')->default(0); // Spouse name


            $table->string('Passport_No')->default(0); // Spouse name
            $table->string('pass_Authority_of_Issue')->default(0); // Spouse name
            $table->date('P_Date_of_issue')->nullable(); // Spouse name Expiry Date
            $table->date('P_Expiry_Date')->nullable(); // Spouse name Expiry Date




            $table->string('ID_NO')->default(0); // Spouse name
            $table->string('ID_Authority_of_Issue')->default(0); // Spouse name
            $table->date('ID_Date_of_issue')->nullable(); // Spouse name Expiry Date
           // $table->date('ID_Expiry_Date')->default(0); // Spouse name Expiry Date



            $table->string('National_ID_Card_NO')->default(0); // Spouse name
            $table->string('National_ID_Authority_of_Issue')->default(0); // Spouse name
            $table->date('National_ID_Date_of_issue')->nullable(); // Spouse name Expiry Date
           // $table->date('National_ID_Expiry_Date')->default(0); // Spouse name Expiry Date


           $table->string('Nationality_Certificate_no')->default(0); // Spouse name
           $table->string('Nationality_Certificate_Authority_of_Issue')->default(0); // Spouse name
           $table->date('Nationality_Certificate_Date_of_issue')->nullable(); // Spouse name Expiry Date
          // $table->date('National_ID_Expiry_Date')->default(0); // Spouse name Expiry Date
          $table->date('Date_Of_Birth')->nullable();




          $table->string('Place_of_Birth')->default(0); // Spouse name
          $table->string('Nationality')->default(0); // Spouse name
          $table->string('Other_Nationality')->default(0); // Spouse name



          $table->string('at_Passport_No')->default(0); // Spouse name
          $table->string('at_pass_Authority_of_Issue')->default(0); // Spouse name
          $table->date('at_P_Date_of_issue')->nullable();// Spouse name Expiry Date
          $table->date('at_P_Expiry_Date')->nullable(); // Spouse name Expiry Date



          // Jobs data   Employer activities Employer Address
          

          $table->string('Profession')->default(0); 
          $table->string('Job_Title')->default(0); 
          $table->string('Institution_Name')->default(0); 
          $table->string('Company_Owner_Name')->default(0); 
          $table->string('Employer_Nationality')->default(0); 
          $table->string('Employer_activities')->default(0); 
          $table->string('Employer_Address')->default(0); 



           // Contact infromation 


           $table->string('Residential_Address')->default(0); 
           $table->string('Nearest_Land_Mark')->default(0); 
         //  $table->string('Institution_Name')->default(0); 
           $table->string('Residence_Type_id')->default(0); 
     

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
        Schema::dropIfExists('kycs');
    }
}
