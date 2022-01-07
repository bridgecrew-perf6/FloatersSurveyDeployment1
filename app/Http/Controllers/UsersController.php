<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Models\Image;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use DB;


class UsersController extends Controller
{
    //  
    function store(Request $req) {

    

        //dd($req);
       $User= new User();
       $User->Age=$req->Age;
       $User->Gender=$req->Gender;
       $User->Longsighted=$req->Longsighted;
       $User->shortsighted=$req->shortsighted;
       $User->country=$req->country;
       $User->suffering_degree=$req->Degree;
       $User->problems_by1=$req->problem1;
       $User->problems_by2=$req->problem2;
       $User->problems_by3=$req->problem3;

       $User->save();
    if(isset($req->width)){
      
        for($i=0;$i<sizeof($req->width);$i++){
            $Image= new Image;
            $Image->user_id=$User->id;
            $Image->X=$req->x_axis[$i];
            $Image->Y=$req->y_axis[$i];
            $Image->floaterType=$req->image_title[$i];
            $Image->rotation=$req->rotation[$i];
            $Image->transparency=$req->transparency[$i];
            $Image->Blurry=$req->Blurry[$i];
            $Image->scaleX=$req->scaleX[$i];
            $Image->scaleY=$req->scaleY[$i];
            $Image->width=$req->width[$i];
            $Image->height=$req->height[$i];
            $Image->eye ='Left';
            $Image->save();
        }
    }else{
        $Image=[];
    }

    if(isset($req->width_2)){ 
        for($j=0;$j<sizeof($req->width_2);$j++){
            
            $imageR= new Image;
            $imageR->user_id=$User->id;
            $imageR->X=$req->x_axis_2[$j];
            $imageR->Y=$req->y_axis_2[$j];
            $imageR->floaterType=$req->image_title_2[$j];
            $imageR->rotation=$req->rotation_2[$j];
            $imageR->transparency=$req->transparency_2[$j];
            $imageR->Blurry=$req->Blurry_2[$j];
            $imageR->scaleX=$req->scaleX_2[$j];
            $imageR->scaleY=$req->scaleY_2[$j];
            $imageR->width=$req->width_2[$j];
            $imageR->height=$req->height_2[$j];
            $imageR->eye ='Right';
            $imageR->save();
        }
     }else{
         $imageR=[];
     }
 
       return view('results',compact(['User','Image','imageR']));
        }
        public function export ()
        {
            return Excel::download(new UsersExport, 'users.xlsx');
        }
        public function export1 ()
        {
            return Excel::download(new UsersExport, 'users.csv');
        }
}












