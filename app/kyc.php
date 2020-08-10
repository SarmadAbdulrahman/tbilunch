<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kyc extends Model
{
    

    protected $fillable=
    [
   
         'appoitment_id'
        , 'baranch_id'
        , 'joint_accounts'
        , 'count_joint_accounts'
        , 'account_type_id'
        , 'Credit_type_id'
        , 'Currency_id'
        , 'Legal_Status_id'
        , 'personal_details_id'
        , 'gender_id'
        , 'Purpose'
        , 'Source_of_income_id'
        , 'Other_Sources_of_Income'
        , 'Total_Monthly_Income_id'
        , 'Monthly_estimate'
        , 'Yearly_estimate'
        , 'First_Name'
        , 'Middle_Name_Initials'
        , 'Family_Name'
        , 'Full_Mother_Name'
        , 'Marital_Status'
        , 'Spouse_name'
        , 'Passport_No'
        , 'pass_Authority_of_Issue'
        , 'P_Date_of_issue'
        , 'P_Expiry_Date'
        , 'ID_NO'
        , 'ID_Authority_of_Issue'
        , 'ID_Date_of_issue'
        , 'National_ID_Card_NO'
        , 'National_ID_Authority_of_Issue'
        , 'National_ID_Date_of_issue'
        , 'Nationality_Certificate_no'
        , 'Nationality_Certificate_Authority_of_Issue'
        , 'Nationality_Certificate_Date_of_issue'
        , 'Date_Of_Birth'
        , 'Place_of_Birth'
        , 'Nationality'
        , 'Other_Nationality'
        , 'at_Passport_No'
        , 'at_pass_Authority_of_Issue'
        , 'at_P_Date_of_issue'
        , 'at_P_Expiry_Date'
        , 'Profession'
        , 'Job_Title'
        , 'Institution_Name'
        , 'Company_Owner_Name'
        , 'Employer_Nationality'
        , 'Employer_activities'
        , 'Employer_Address'
        , 'Residential_Address'
        , 'Nearest_Land_Mark'
        , 'Residence_Type_id'
        , 'id_path'
        , 'NationalityID'
        , 'Certificate_ofNationality'
        , 'Passport'
        , 'Residence_Card'
        , 'NationalityIDCardWife'
 ];
}
