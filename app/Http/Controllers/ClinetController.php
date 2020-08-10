<?php

namespace App\Http\Controllers;

use App\AccountType;
use App\CreditType;
use App\Currencyid;
use App\gender;
use App\kyc;
use App\LegalStatusid;
use App\personaldetails;
use App\ResidenceTypeid;
use App\Sourceofincome;
use App\TotalMonthlyIncome;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Branch;
use App\service;
use App\Post;
use App\appointment;

class ClinetController extends Controller
{
    //service

    public  function PostRequest(Request $request)
    {
        # code... this is new way to update all do this way 

       // dd($request);   services

        $Date=Carbon::tomorrow()->format("Y-m-d");
      
        $CountOfRecored=appointment::where('branches_id','=',$request->Bracnhes)->where('service_id','=',$request->services)->where('date','=',$Date)->count();

        if($CountOfRecored>=1)
        {





            $Current=appointment::where('branches_id','=',$request->Bracnhes)->where('service_id','=',$request->services)->where('date','=',$Date)->get()->last()->cr_count;
            $av_count=appointment::where('branches_id','=',$request->Bracnhes)->where('service_id','=',$request->services)->where('date','=',$Date)->get()->last()->av_count;

            if( $av_count>$Current) {

                appointment::where('branches_id','=',$request->Bracnhes)->where('service_id','=',$request->services)->where('date','=',$Date)->update(
                    [
                         'cr_count'=>appointment::where('branches_id','=',$request->Bracnhes)->where('service_id','=',$request->services)->where('date','=',$Date)->get()->last()->cr_count+1
                    ]
                    );
    
    
    
                   $p= Post::create([
                        'branches_id'  =>$request['Bracnhes']
                      , 'serviceType_id'=>$request['services']
                      , 'username'=>$request['your_name']
                      , 'email'=>$request['your_email']
                      , 'phonenumber'=>$request['your_phone']
                      , 'date'=>$Date
                      , 'cr_count'=>1
                  ]);


                  $Message=" لقد تم الحجز بنجاح ، رقم الحجز". $p->id;

                  session()->flash('message',  $Message);


                 

                  

                  return  back();


            }

            else {




                session()->flash('message', 'نعتذر لايوجد حجز في هذا اليوم');

                return  back();
              


            }



          



        }

        else
        
        {


            appointment::create([
                'branches_id'  =>$request['Bracnhes']
                 , 'service_id'  =>$request['services']
              , 'date'=>$Date
              , 'cr_count'=>1
          ]);




            Post::create([
                'branches_id'  =>$request['Bracnhes']
              , 'serviceType_id'=>$request['services']
              , 'username'=>$request['your_name']
              , 'email'=>$request['your_email']
              , 'phonenumber'=>$request['your_phone']
              , 'date'=>$Date
              , 'cr_count'=>1
          ]);

        }

     


        session()->flash('message', 'تم الحجز بنجاح');

        return  back();

       // return redirect()->back();
    }


     public function CreateView()
    {
        # code... service

        //

        $Date=Carbon::tomorrow()->format("Y-m-d");
        $OpenBranches=appointment::where('date','=',$Date)->select('branches_id')->get();
      //  dd(array_values($OpenBranches));
        $ActiveBranch=Array();
        foreach ($OpenBranches as $OpenBranche)
        {

            array_push($ActiveBranch,$OpenBranche['branches_id']);

        }



        $Baranchers=Branch::whereIn('id',$ActiveBranch)->get();
        $services=service::all();
        $InfromationArray=Array(
            'Baranchers'=>$Baranchers,
            'services'=>$services
        );

        return view('welcome',$InfromationArray);
    }



        public function kyc()
        
        {


            $AccountType=AccountType::all();
            $CreditType=CreditType::all();
            $Currencyid= Currencyid::all();
            $gender= gender::all();
            $LegalStatusid=LegalStatusid::all();
            $personaldetails=  personaldetails::all();
            $ResidenceTypeid= ResidenceTypeid::all();
            $Sourceofincome= Sourceofincome::all();
            $TotalMonthlyIncome= TotalMonthlyIncome::all();







        $ArrayInfromation=Array(

            'AccountType'=>$AccountType
            ,'CreditType'=>$CreditType
            ,'Currencyid'=>$Currencyid
           ,'gender'=>$gender
           ,'LegalStatusid'=>$LegalStatusid
          ,'personaldetails'=>$personaldetails
         ,'ResidenceTypeid'=>$ResidenceTypeid
          ,'Sourceofincome'=>$Sourceofincome
        ,'TotalMonthlyIncome'=>$TotalMonthlyIncome


        );

        return view('kyc',$ArrayInfromation);
        }



        public function pkyc(Request $request){



           
           

            $file_id_docs_1 = $request->file('id_docs_1');
            $name_id_docs_1 = rand(11111, 99999) . '.' . $file_id_docs_1->getClientOriginalExtension();
            $request->file('id_docs_1')->move("img", $name_id_docs_1);

            $file_id_docs_2 = $request->file('id_docs_2');
            $name_id_docs_2 = rand(11111, 99999) . '.' . $file_id_docs_2->getClientOriginalExtension();
            $request->file('id_docs_2')->move("img", $name_id_docs_2);



            $file_national_id_1 = $request->file('national_id_1');
            $name_national_id_1 = rand(11111, 99999) . '.' . $file_national_id_1->getClientOriginalExtension();
            $request->file('national_id_1')->move("img", $name_national_id_1);




            $file_national_id_2 = $request->file('national_id_2');
            $name_national_id_2 = rand(11111, 99999) . '.' . $file_national_id_2->getClientOriginalExtension();
            $request->file('national_id_2')->move("img", $name_national_id_2);






                 kyc::create(
                     [
         
                          'appoitment_id'=>1
                         , 'baranch_id'=>1
                         , 'joint_accounts'=>1
                         , 'count_joint_accounts'=>0
                         , 'account_type_id'=>$request['account_type_id']
                         , 'Credit_type_id'=>$request['Credit_type_id']
                         , 'Currency_id'=>$request['Currency_id']
                         , 'Legal_Status_id'=>$request['Legal_Status_id']
                         , 'personal_details_id'=>$request['personal_details_id']
                         , 'gender_id'=>$request['gender_id']
                         , 'Purpose'=>'this'
                         , 'Source_of_income_id'=>$request['Source_of_income_id']
                         , 'Other_Sources_of_Income'=>$request['Other_Sources_of_Income']
                         , 'Total_Monthly_Income_id'=>$request['Total_Monthly_Income_id']
                         , 'Monthly_estimate'=>$request['Monthly_estimate']
                         , 'Yearly_estimate'=>$request['Yearly_estimate']
                         , 'First_Name'=>$request['First_Name']
                         , 'Middle_Name_Initials'=>$request['Middle_Name_Initials']
                         , 'Family_Name'=>$request['Family_Name']
                         , 'Full_Mother_Name'=>$request['Full_Mother_Name']
                         , 'Marital_Status'=>$request['Marital_Status']
                         , 'Spouse_name'=>$request['Spouse_name']
                         , 'Passport_No'=>$request['Passport_No']
                         , 'pass_Authority_of_Issue'=>$request['pass_Authority_of_Issue']
                         , 'P_Date_of_issue'=>$request['P_Date_of_issue']
                         , 'P_Expiry_Date'=>$request['P_Expiry_Date']
                         , 'ID_NO'=>$request['ID_NO']
                         , 'ID_Authority_of_Issue'=>$request['ID_Authority_of_Issue']
                         , 'ID_Date_of_issue'=>$request['ID_Date_of_issue']
                         , 'National_ID_Card_NO'=>$request['National_ID_Card_NO']
                         , 'National_ID_Authority_of_Issue'=>$request['National_ID_Authority_of_Issue']
                         , 'National_ID_Date_of_issue'=>$request['National_ID_Date_of_issue']
                         , 'Nationality_Certificate_no'=>$request['Nationality_Certificate_no']
                         , 'Nationality_Certificate_Authority_of_Issue'=>$request['Nationality_Certificate_Authority_of_Issue']
                         , 'Nationality_Certificate_Date_of_issue'=>$request['Nationality_Certificate_Date_of_issue']
                         , 'Date_Of_Birth'=>$request['Date_Of_Birth']
                         , 'Place_of_Birth'=>$request['Place_of_Birth']
                         , 'Nationality'=>$request['Nationality']
                         , 'Other_Nationality'=>""
                         , 'at_Passport_No'=>""
                         , 'at_pass_Authority_of_Issue'=>""
                         , 'at_P_Date_of_issue'=>"2020-2-2"
                         , 'at_P_Expiry_Date'=>"2020-2-2"
                         , 'Profession'=>''
                         , 'Job_Title'=>$request['Job_Title']
                         , 'Institution_Name'=>$request['Institution_Name'] // 
                         , 'Company_Owner_Name'=>$request['Company_Owner_Name'] // 
                         , 'Employer_Nationality'=>$request['Employer_Nationality']
                         , 'Employer_activities'=>$request['Employer_activities']
                         , 'Employer_Address'=>$request['Employer_Address']
                         , 'Residential_Address'=>$request['Residential_Address']
                         , 'Nearest_Land_Mark'=>$request['Nearest_Land_Mark']
                         , 'Residence_Type_id'=>$request['Residence_Type_id']
                         , 'id_path'=>$name_id_docs_1 
                         , 'NationalityID'=>$name_national_id_1
                         , 'Certificate_ofNationality'=>$name_id_docs_2
                         , 'Passport'=>$name_national_id_2
                 ]);
         
         
          
        session()->flash('message', 'تم الحجز بنجاح');

        return  back();
         
         
         
             }
         




















}
