<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Image;
use Redirect,Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Collection;
use DB;




class ChartJSController extends Controller
{
    //public int $min;
    //public int $max;

    public function Chartjs(Request $request){


        function Age($min,$max){
           $Age = User::where('Age', '>',$min)->where('Age', '<=',$max)->count();
            return $Age;
        }
                $Age1= Age(0,25);
                $Age2= Age(26,45);
                $Age3= Age(45,65);
                $Age4= Age(65,75);
                $Age5= Age(75,100);
                $Age=[$Age1,$Age2,$Age3,$Age4,$Age5];

                //dd($Age);

               
                $data  = array(User::count());
                //dd($data);

                 function Long($min,$max){
                     
                    $Longsighted=DB::table('users')
                   ->where('Age', '>',$min)
                   ->where('Age', '<=',$max)
                   ->where('Longsighted', '=', "Longsighted_yes")
                   ->count();
                   return $Longsighted;
               }
                
                    $Long1= Long(0,25);
                    $Long2= Long(26,45);
                    $Long3= Long(45,65);
                    $Long4= Long(65,75);
                    $Long5= Long(75,100);


                    $hhh=User::join('images','images.user_id','users.id')->where('floaterType','Cells')->count();

                    //dd($hhh);
                $longsighted=[$Long1,$Long2,$Long3,$Long4,$Long5];

                function Cell($min, $max){
                    $Cell = User::join('images','images.user_id','users.id')->where('Age', '>',$min)->where('Age', '<=',$max)->where('floaterType','Cells')->count();
                    return $Cell;
                }
                        $Cell1= Cell(0,25);
                        $Cell2= Cell(26,45);
                        $Cell3= Cell(45,65);
                        $Cell4= Cell(65,75);
                        $Cell5= Cell(75,100);
                $cells=[$Cell1, $Cell2, $Cell3, $Cell4, $Cell5];
                                    //dd($cells);

                function Membrane($min, $max){
                $Membrane = User::join('images','images.user_id','users.id')->where('Age', '>',$min)->where('Age', '<=',$max)->where('floaterType','Membrane')->count();
                return $Membrane;
                
            }
                $Membrane1= Membrane(0,25);
                $Membrane2= Membrane(26,45);
                $Membrane3= Membrane(45,65);
                $Membrane4= Membrane(65,75);
                $Membrane5= Membrane(75,100);
                $Membrane=[$Membrane1, $Membrane2, $Membrane3, $Membrane4, $Membrane5];
                //dd($Membrane);

                function Strands($min, $max){
                    $Strands = User::join('images','images.user_id','users.id')->where('Age', '>',$min)->where('Age', '<=',$max)->where('floaterType','Strands')->count();
                    return $Strands;
                  }

                  $Strands1= Strands(0,25);
                  $Strands2= Strands(26,45);
                  $Strands3= Strands(45,65);
                  $Strands4= Strands(65,75);
                  $Strands5= Strands(75,100);
                    $Strands=[$Strands1, $Strands2, $Strands3, $Strands4, $Strands5];
                //dd($Strands);

                $problem1=DB::select("select distinct problems_by1 from users");
                if(isset($request->gender,$request->Eye_Diseases,$request->image)){
                   $count=DB::table('users')
                   ->where('gender',$request->gender)
                   ->count(); 
                  //// dd($count);      
                    if($request->Eye_Diseases!=='null'){
                        if($request->Eye_Diseases=='Longsighted_yes')
                        $count=DB::table('users')->where('gender',$request->gender)->where('Longsighted',$request->Eye_Diseases)->count(); 

                    }
                    if($request->Eye_Diseases!=='null'){
                        if($request->Eye_Diseases=='shortsighted_yes')
                        $count=DB::table('users')->where('gender',$request->gender)->where('shortsighted',$request->Eye_Diseases)->count(); 

                    }
                    if($request->image!=='null'){
                        if($request->Eye_Diseases=='shortsighted_yes')
                        $count=DB::table('users')
                        ->join('images','users.id','images.user_id')
                        ->where('images.floaterType',$request->image)
                        ->where('gender',$request->gender)->where('shortsighted',$request->Eye_Diseases)->count(); 
                        if($request->Eye_Diseases=='Longsighted_yes')
                        $count=DB::table('users')
                        ->join('images','users.id','images.user_id')
                        ->where('images.floaterType',$request->image)
                        ->where('gender',$request->gender)->where('Longsighted',$request->Eye_Diseases)->count(); 

                    }
                    $longsighted=[$count];
                }else{
                   $longsighted=[0]; 
                }
                $images=DB::select("select distinct floaterType from images");
              
                 return view('chartjs',['Data' => $data],['images'=>$images,'problems1'=>$problem1,'Age' => $Age,'Longsighted' => $longsighted,'cells'=>$cells,'Membrane'=>$Membrane, 'Strands'=>$Strands,]);
      }
                   
                        public function update_chart(Request $request){    
        
                        function Age($min,$max){
                            $Age = User::where('Age', '>',$min)->where('Age', '<=',$max)->count();
                            return $Age;
                        }
                                $Age1= Age(0,25);
                                $Age2= Age(26,45);
                                $Age3= Age(45,65);
                                $Age4= Age(65,75);
                                $Age5= Age(75,100);
                                $Age=[$Age1,$Age2,$Age3,$Age4,$Age5];
                
                                //dd($Age);
                
                                
                                $data  = array(User::count());
                                //dd($data);
                
                                function Long($min,$max){
                                    
                                    $Longsighted=DB::table('users')
                                    ->where('Age', '>',$min)
                                    ->where('Age', '<=',$max)
                                    ->where('Longsighted', '=', "Longsighted_yes")
                                    ->count();
                                    return $Longsighted;
                                }
                                
                                    $Long1= Long(0,25);
                                    $Long2= Long(26,45);
                                    $Long3= Long(45,65);
                                    $Long4= Long(65,75);
                                    $Long5= Long(75,100);
                
                
                                    $hhh=User::join('images','images.user_id','users.id')->where('floaterType','Cells')->count();
                
                                    //dd($hhh);
                                $longsighted_second=[$Long1,$Long2,$Long3,$Long4,$Long5];
                //dd($longsighted_second);
                                function Cell($min, $max){
                                    $Cell = User::join('images','images.user_id','users.id')->where('Age', '>',$min)->where('Age', '<=',$max)->where('floaterType','Cells')->count();
                                    return $Cell;
                                }
                                        $Cell1= Cell(0,25);
                                        $Cell2= Cell(26,45);
                                        $Cell3= Cell(45,65);
                                        $Cell4= Cell(65,75);
                                        $Cell5= Cell(75,100);
                                $cells=[$Cell1, $Cell2, $Cell3, $Cell4, $Cell5];
                                                    //dd($cells);
                
                                function Membrane($min, $max){
                                $Membrane = User::join('images','images.user_id','users.id')->where('Age', '>',$min)->where('Age', '<=',$max)->where('floaterType','Membrane')->count();
                                return $Membrane;
                                
                            }
                                $Membrane1= Membrane(0,25);
                                $Membrane2= Membrane(26,45);
                                $Membrane3= Membrane(45,65);
                                $Membrane4= Membrane(65,75);
                                $Membrane5= Membrane(75,100);
                                $Membrane=[$Membrane1, $Membrane2, $Membrane3, $Membrane4, $Membrane5];
                                //dd($Membrane);
                
                                function Strands($min, $max){
                                    $Strands = User::join('images','images.user_id','users.id')->where('Age', '>',$min)->where('Age', '<=',$max)->where('floaterType','Strands')->count();
                                    return $Strands;
                                }
                
                                $Strands1= Strands(0,25);
                                $Strands2= Strands(26,45);
                                $Strands3= Strands(45,65);
                                $Strands4= Strands(65,75);
                                $Strands5= Strands(75,100);
                                    $Strands=[$Strands1, $Strands2, $Strands3, $Strands4, $Strands5];
                                //dd($Strands);
                
                                $problem1=DB::select("select distinct problems_by1 from users");
                                if(isset($request->gender,$request->Eye_Diseases,$request->image)){
                                    $count=DB::table('users')
                                    ->where('gender',$request->gender)
                                    ->count(); 
                                //// dd($count);      
                                    if($request->Eye_Diseases!=='null'){
                                        if($request->Eye_Diseases=='Longsighted_yes')
                                        $count=DB::table('users')->where('gender',$request->gender)->where('Longsighted',$request->Eye_Diseases)->count(); 
                
                                    }
                                    if($request->Eye_Diseases!=='null'){
                                        if($request->Eye_Diseases=='shortsighted_yes')
                                        $count=DB::table('users')->where('gender',$request->gender)->where('shortsighted',$request->Eye_Diseases)->count(); 
                
                                    }
                                    if($request->image!=='null'){
                                        if($request->Eye_Diseases=='shortsighted_yes')
                                        $count=DB::table('users')
                                        ->join('images','users.id','images.user_id')
                                        ->where('images.floaterType',$request->image)
                                        ->where('gender',$request->gender)->where('shortsighted',$request->Eye_Diseases)->count(); 
                                        if($request->Eye_Diseases=='Longsighted_yes')
                                        $count=DB::table('users')
                                        ->join('images','users.id','images.user_id')
                                        ->where('images.floaterType',$request->image)
                                        ->where('gender',$request->gender)->where('Longsighted',$request->Eye_Diseases)->count(); 
                
                                    }
                                    $longsighted=[$count];
                                }else{
                                    $longsighted=[0]; 
                                }
                                
                                switch ($request->value) {
                                    case 'Age':
                                        $data_one=$Age;
                                        break;
                                    case 'Longsighted':
                                        $data_one=$longsighted_second;
                                        break;
                                    case 'membrane':
                                        $data_one=$Membrane;
                                        break;
                                    case 'cells':
                                            $data_one=$cells;
                                            break;
                                    case 'strands':
                                    $data_one=$Strands;
                                    break;
                                }

                                $images=DB::select("select distinct floaterType from images");
                            
                                return view('one_chart',['Data' => $data],['data_one'=>$data_one,'images'=>$images,'problems1'=>$problem1,'Age' => $Age,'Longsighted' => $longsighted,'cells'=>$cells,'Membrane'=>$Membrane, 'Strands'=>$Strands,]);
                    
                    }
                }