<?php

namespace App\Http\Controllers;


use App\MedicalHistory;
use App\VisitCount;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class MedicalHistoryController extends Controller
{
    //
    public function store(Request $request,$id)
    {


        $this->validate($request,[
           'complain'=>'required',
            'visitDate'=>'required',
            'doctorAdvice'=>'required',


        ]);

        $month = date("m",strtotime($request->visitDate));

        $year=date("y",strtotime($request->visitDate));
        $year='20'.$year;
        $day=date("d",strtotime($request->visitDate));
        $final=$year."-".$month."-".$day;




        MedicalHistory::create([

           'complain'=>$request->complain,
            'followUp'=>$request->followUp,
            'doctorAdvice'=>$request->doctorAdvice,
            'followUpDate'=>$request->followUp,
            'patient_id'=>$id,
            'visitDate'=>$final,
            'doctorId'=>$request->doctorId

        ]);



      $test=VisitCount::where('year_id',$year)->first();
        if(!$test){
            VisitCount::create([
               'year_id'=>$year,
                'January'=>0,
                'Febuary'=>0,
                'March'=>0,
                'April'=>0,
                'May'=>0,
                'June'=>0,
                'July'=>0,
                'August'=>0,
                'September'=>0,
                'October'=>0,
                'November'=>0,
                'December'=>0,
            ]);
        }


        if($month == "01"){
            //DB::table('users')->whereId(Auth::user()->id)->increment('position');

            DB::table('visit_counts')->where('year_id',$year)->increment('January');
            
        }


        if($month == '02'){
            DB::table('visit_counts')->where('year_id',$year)->increment('February');
        }
        if($month == '03'){
            DB::table('visit_counts')->where('year_id',$year)->increment('March');
        }
        if($month == '04'){
            DB::table('visit_counts')->where('year_id',$year)->increment('April');
        }
        if($month == '05'){
            DB::table('visit_counts')->where('year_id',$year)->increment('May');
        }
        if($month == '06'){
            DB::table('visit_counts')->where('year_id',$year)->increment('June');
        }
        if($month == '07'){
            DB::table('visit_counts')->where('year_id',$year)->increment('July');
        }
        if($month == '08'){
            DB::table('visit_counts')->where('year_id',$year)->increment('August');
        }
        if($month == '09'){
            DB::table('visit_counts')->where('year_id',$year)->increment('September');
        }
        if($month == 10){
            DB::table('visit_counts')->where('year_id',$year)->increment('October');
        }
        if($month == 11){
            DB::table('visit_counts')->where('year_id',$year)->increment('November');
        }
        if($month == 12){

            DB::table('visit_counts')->where('year_id',$year)->increment('December');

        }

        return back()->with('Added',"Patient Medical Details added");

    }
}
