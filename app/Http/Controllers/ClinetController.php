<?php

namespace App\Http\Controllers;

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
    
    
    
                    Post::create([
                        'branches_id'  =>$request['Bracnhes']
                      , 'serviceType_id'=>$request['services']
                      , 'username'=>$request['your_name']
                      , 'email'=>$request['your_email']
                      , 'phonenumber'=>$request['your_phone']
                      , 'date'=>$Date
                      , 'cr_count'=>1
                  ]);


                  session()->flash('message', 'تم الحجز بنجاح');

                  return  back();


            }

            else {




                session()->flash('message', 'نعتذد، لايوجد حجز في هذا اليوم');

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
}
