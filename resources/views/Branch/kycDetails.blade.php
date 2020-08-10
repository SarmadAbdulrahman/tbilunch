@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Branch Agent</a>
                </li>
                <li>
                    <a href="#">Show Appointment</a>
                </li>
                <li class="active">Show Appointment</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                Branch Agent
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Appointment
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="/Branch">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="widget">
                    <div class="widget-header  with-footer">
                        <span class="widget-caption">Appointment Progress</span>
                        <div class="widget-buttons">
                            <a href="#" data-toggle="maximize">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#" data-toggle="collapse">
                                <i class="fa fa-minus"></i>
                            </a>
                            <a href="#" data-toggle="dispose">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">

                        <div class="flip-scroll">
                       



<div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom bordered-themeprimary">
                                    <i class="widget-icon fa fa-text-width"></i>
                                    <span class="widget-caption">Persoanl Infromation</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-action="refresh">
                                            <i class="fa fa-undo"></i>
                                        </a>
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body no-padding">
                                    <div class="widget-main">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="30%">feild Name</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        First Name
                                                    </td>
                                                    <td>
                                                        <h6>{{$Posts->First_Name}}</h6>
                            
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Middle_Name_Initials</td>
                                                    <td>
                                                    <h6>{{$Posts->Middle_Name_Initials}}</h6>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>Family_Name</td>
                                                    <td>
                                                    <h6>{{$Posts->Family_Name}}</h6>
                                                    </td>
                                                </tr>




                                              <tr>

                                                    <td>Full_Mother_Name</td>
                                                    <td>
                                                    <h6>{{$Posts->Full_Mother_Name}}</h6>
                                                    </td>

                                                    
                                             </tr>



                                              <tr>
                                                    <td>Marital_Status</td>
                                                    <td>
                                                    <h6>{{$Posts->Marital_Status}}</h6>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>Family_Name</td>
                                                    <td>
                                                    <h6>{{$Posts->Family_Name}}</h6>
                                                    </td>
                                                </tr>



                                                 <tr>
                                                    <td>Date_Of_Birth</td>
                                                    <td>
                                                    <h6>{{$Posts->Date_Of_Birth}}</h6>
                                                    </td>
                                                </tr>



                                                   <tr>
                                                    <td>Place_of_Birth</td>
                                                    <td>
                                                    <h6>{{$Posts->Place_of_Birth}}</h6>
                                                    </td>
                                                </tr>


                                                  <tr>
                                                    <td>Nationality</td>
                                                    <td>
                                                    <h6>{{$Posts->Nationality}}</h6>
                                                    </td>
                                                </tr>





                                                      <tr>
                                                    <td>Passport_No</td>
                                                    <td>
                                                    <h6>{{$Posts->Passport_No}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>pass_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->pass_Authority_of_Issue}}</h6>
                                                    </td>
                                                </tr>



                                                     <tr>
                                                    <td>P_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->P_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>


                                                   <tr>
                                                    <td>P_Expiry_Date</td>
                                                    <td>
                                                    <h6>{{$Posts->P_Expiry_Date}}</h6>
                                                    </td>
                                                </tr>



           <tr>


<td>Pass_Image</td>
<td>
<img src="{{asset("img")}}/{{$Posts->id_path}}" class="img-responseive" alt=""/>
</td>


</tr>








                                                              <tr>
                                                    <td>ID_NO</td>
                                                    <td>
                                                    <h6>{{$Posts->ID_NO}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>ID_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->ID_Authority_of_Issue}}</h6>
                                                    </td>
                                                </tr>



                                                  <tr>
                                                    <td>ID_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->ID_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>



                                             <tr>


                                                    <td>ID_Image</td>
                                                    <td>
                                                    <img src="{{asset("img")}}/{{$Posts->id_path}}" class="img-responseive" alt=""/>
                                                    </td>


                                                </tr>










                                                              <tr>
                                                    <td>National_ID_Card_NO</td>
                                                    <td>
                                                    <h6>{{$Posts->National_ID_Card_NO}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>National_ID_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->National_ID_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>



                                                     <tr>
                                                    <td>National_ID_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->National_ID_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>



                                                    <tr>


                                                <td>National_ID_Image</td>
                                                <td>
                                                <img src="{{asset("img")}}/{{$Posts->NationalityID}}" class="img-responseive" alt=""/>
                                                </td>


                                                </tr>






                                                              <tr>
                                                    <td>Nationality_Certificate_no</td>
                                                    <td>
                                                    <h6>{{$Posts->Nationality_Certificate_no}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>Nationality_Certificate_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->Nationality_Certificate_Authority_of_Issue}}</h6>
                                                    </td>
                                                </tr>



                                                     <tr>
                                                    <td>Nationality_Certificate_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->Nationality_Certificate_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>



                                                      <tr>


                                            <td>Nationality_Certificate_Image</td>
                                            <td>
                                            <img src="{{asset("img")}}/{{$Posts->Certificate_ofNationality}}" class="img-responseive" alt=""/>
                                            </td>


                                            </tr>

                                            </tbody>
                                        </table>
                                    </div><!--Widget Main Container-->
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>


























<div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom bordered-themeprimary">
                                    <i class="widget-icon fa fa-text-width"></i>
                                    <span class="widget-caption">Account Infromation</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-action="refresh">
                                            <i class="fa fa-undo"></i>
                                        </a>
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body no-padding">
                                    <div class="widget-main">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="30%">Type</th>
                                                    <th>Example</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                    <td>
                                                        Accunt Type
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\AccountType::find($Posts->account_type_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>




     
        

         


                                              <tr>
                                                    <td>
                                                    CreditType
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\CreditType::find($Posts->Credit_type_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>
                                                    Currency
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\Currencyid::find($Posts->Currency_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>



                                                 <tr>
                                                    <td>
                                                    personal details
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\personaldetails::find($Posts->personal_details_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>





                                                    <tr>
                                                    <td>
                                                    Legal Status
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\LegalStatusid::find($Posts->Legal_Status_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>




  <tr>
                                                    <td>
                                                    Purpose
                                                    </td>
                                                    <td>
                                                        <h6>{{$Posts->Purpose}}</h6>
                        
                                                    </td>
                                                </tr>



                                               <tr>
                                                    <td>
                                                    ResidenceTypeid
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\ResidenceTypeid::find($Posts->Residence_Type_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>



                                                    <tr>
                                                    <td>
                                                    Sourceofincome
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\Sourceofincome::find($Posts->Source_of_income_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>




      <tr>
                                                    <td>
                                                    TotalMonthlyIncome
                                                    </td>
                                                    <td>
                                                        <h6>{{\App\TotalMonthlyIncome::find($Posts->Total_Monthly_Income_id)->name}}</h6>
                        
                                                    </td>
                                                </tr>



                                                     <td>
                                                     Other_Sources_of_Income
                                                    </td>
                                                    <td>
                                                        <h6>{{$Posts->Other_Sources_of_Income}}</h6>
                        
                                                    </td>
                                                </tr>



                                                      <td>
                                                      Monthly_estimate
                                                    </td>
                                                    <td>
                                                        <h6>{{$Posts->Monthly_estimate}}</h6>
                        
                                                    </td>
                                                </tr>





                                                      <td>
                                                      Yearly_estimate
                                                    </td>
                                                    <td>
                                                        <h6>{{$Posts->Yearly_estimate}}</h6>
                        
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </div><!--Widget Main Container-->
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>






<div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom bordered-themeprimary">
                                    <i class="widget-icon fa fa-text-width"></i>
                                    <span class="widget-caption"> Jobs Infromation</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-action="refresh">
                                            <i class="fa fa-undo"></i>
                                        </a>
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body no-padding">
                                    <div class="widget-main">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="30%">feild Name</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                      Job_Title
                                                    </td>
                                                    <td>
                                                        <h6>{{$Posts->Job_Title}}</h6>
                            
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Institution_Name</td>
                                                    <td>
                                                    <h6>{{$Posts->Institution_Name}}</h6>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>Company_Owner_Name</td>
                                                    <td>
                                                    <h6>{{$Posts->Company_Owner_Name}}</h6>
                                                    </td>
                                                </tr>




                                              <tr>

                                                    <td>Employer_Nationality</td>
                                                    <td>
                                                    <h6>{{$Posts->Employer_Nationality}}</h6>
                                                    </td>

                                                    
                                             </tr>



                                              <tr>
                                                    <td>Employer_activities</td>
                                                    <td>
                                                    <h6>{{$Posts->Employer_activities}}</h6>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>Employer_Address</td>
                                                    <td>
                                                    <h6>{{$Posts->Employer_Address}}</h6>
                                                    </td>
                                                </tr>



                                                 <tr>
                                                    <td>Residential_Address</td>
                                                    <td>
                                                    <h6>{{$Posts->Residential_Address}}</h6>
                                                    </td>
                                                </tr>



                                                   <tr>
                                                    <td>Place_of_Birth</td>
                                                    <td>
                                                    <h6>{{$Posts->Place_of_Birth}}</h6>
                                                    </td>
                                                </tr>


                                                  <tr>
                                                    <td>Nearest_Land_Mark</td>
                                                    <td>
                                                    <h6>{{$Posts->Nearest_Land_Mark}}</h6>
                                                    </td>
                                                </tr>





                                                      <tr>
                                                    <td>Passport_No</td>
                                                    <td>
                                                    <h6>{{$Posts->Passport_No}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>pass_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->pass_Authority_of_Issue}}</h6>
                                                    </td>
                                                </tr>



                                                     <tr>
                                                    <td>P_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->P_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>


                                                   <tr>
                                                    <td>P_Expiry_Date</td>
                                                    <td>
                                                    <h6>{{$Posts->P_Expiry_Date}}</h6>
                                                    </td>
                                                </tr>








                                                              <tr>
                                                    <td>ID_NO</td>
                                                    <td>
                                                    <h6>{{$Posts->ID_NO}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>ID_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->ID_Authority_of_Issue}}</h6>
                                                    </td>
                                                </tr>



                                                     <tr>
                                                    <td>ID_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->ID_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>







                                                              <tr>
                                                    <td>National_ID_Card_NO</td>
                                                    <td>
                                                    <h6>{{$Posts->National_ID_Card_NO}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>National_ID_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->National_ID_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>



                                                     <tr>
                                                    <td>National_ID_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->National_ID_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>








                                                              <tr>
                                                    <td>Nationality_Certificate_no</td>
                                                    <td>
                                                    <h6>{{$Posts->Nationality_Certificate_no}}</h6>
                                                    </td>
                                                </tr>



                                                       <tr>
                                                    <td>Nationality_Certificate_Authority_of_Issue</td>
                                                    <td>
                                                    <h6>{{$Posts->Nationality_Certificate_Authority_of_Issue}}</h6>
                                                    </td>
                                                </tr>



                                                     <tr>
                                                    <td>Nationality_Certificate_Date_of_issue</td>
                                                    <td>
                                                    <h6>{{$Posts->Nationality_Certificate_Date_of_issue}}</h6>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div><!--Widget Main Container-->
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>



















                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Body -->
@endsection
@extends('layouts.ThemeSource.footer')

@section('js')
    <script>
        $(document).ready(function () {
            // this is for get a way  department  ChangePassword
          

            $('body').on('click','.ChangeRole',function () {


                var TicketID=$(this).attr('id');

                $('.id').val(TicketID);
                $('#exampleModal').modal('show');


            });







        });
    </script>
@endsection
