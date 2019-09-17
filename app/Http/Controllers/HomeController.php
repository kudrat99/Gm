<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Plan;
use App\It;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('main');
    }

    
    public function show(){
        $user_id = Auth::user()->id;

      if($user_id == 1){
                $datas = It::all();
            }

            if($user_id == 2){
                $datas = Plan::all();
            }

           // if($user_id == 3){
             //   $data = ModelNomi::all();
            //}

          //  if($user_id == 4){
           //     $data = ModelNomi::all();
          //  }

        return view('show',compact('datas'));

    }
    public function create()
    {
        
         

        $user_id=Auth::user()->id;
        if ($user_id==1) {
            $datas=It::all(); 
        }
        if ($user_id==2) {
            $datas=Plan::all(); 
        }

        return view('create',compact('datas'));
    }
    public function store(Request $request)

    {
        $request->validate([
            'tabel'=> 'required|unique:its|unique:plans|max:4|min:4',
            'name'=>'required|unique:its|unique:plans|string',
            'doljn'=>'required',
            'd1'=>'required|max:2',
            'd2'=>'required|max:2',
            'd3'=>'required|max:2',
            'd4'=>'required|max:2',
            'd5'=>'required|max:2',
            'd6'=>'required|max:2',
            'd8'=>'required|max:2',
            'd7'=>'required|max:2',
            'd9'=>'required|max:2',
            'd10'=>'required|max:2',
            'd11'=>'required|max:2',
            'd12'=>'required|max:2',
            'd13'=>'required|max:2',
            'd14'=>'required|max:2',
            'd15'=>'required|max:2',
            'fakt'=>'required|max:3',
            'otpusk'=>'required|max:3',
            'bolezn'=>'required|max:3',
            'razrad'=>'required|max:3',
            'progul'=>'required|max:3',
            'vixodn'=>'required|max:3',
            'gosob'=>'required|max:3',
            'komand'=>'required|max:3',
            'vsego'=>'required|max:3',
            'osnovan'=>'required|max:3',
            'sverxuroch'=>'required|max:3',
            'vsegoch'=>'required|max:3'

        ]);
        $user_id=Auth::user()->id;
       
        if ($user_id==1) {
            $datas= new It;
            $datas->tabel=$request->tabel;
            $datas->name=$request->name;
            $datas->doljn=$request->doljn;
            $datas->d1=$request->d1;
            $datas->d2=$request->d2;
            $datas->d3=$request->d3;
            $datas->d4=$request->d4;
            $datas->d5=$request->d5;
            $datas->d6=$request->d6;
            $datas->d7=$request->d7;
            $datas->d8=$request->d8;
            $datas->d9=$request->d9;
            $datas->d10=$request->d10;
            $datas->d11=$request->d11;
            $datas->d12=$request->d12;
            $datas->d13=$request->d13;
            $datas->d14=$request->d14;
            $datas->d15=$request->d15;
            $datas->fakt=$request->fakt;
            $datas->otpusk=$request->otpusk;
            $datas->bolezn=$request->bolezn;
            $datas->razrad=$request->razrad;
            $datas->progul=$request->progul;
            $datas->vixodn=$request->vixodn;
            $datas->gosob=$request->gosob;
            $datas->komand=$request->komand;
            $datas->vsego=$request->vsego;
            $datas->osnovan=$request->osnovan;
            $datas->sverxuroch=$request->sverxuroch;
            $datas->vsegoch=$request->vsegoch;
            $datas->save();
            
        }
        if ($user_id==2) {
            $datas= new Plan;
            $datas->tabel=$request->tabel;
            $datas->name=$request->name;
            $datas->doljn=$request->doljn;
            $datas->name=$request->name;
            $datas->d1=$request->d1;
            $datas->d2=$request->d2;
            $datas->d3=$request->d3;
            $datas->d4=$request->d4;
            $datas->d5=$request->d5;
            $datas->d6=$request->d6;
            $datas->d7=$request->d7;
            $datas->d8=$request->d8;
            $datas->d9=$request->d9;
            $datas->d10=$request->d10;
            $datas->d11=$request->d11;
            $datas->d12=$request->d12;
            $datas->d13=$request->d13;
            $datas->d14=$request->d14;
            $datas->d15=$request->d15;
            $datas->fakt=$request->fakt;
            $datas->otpusk=$request->otpusk;
            $datas->bolezn=$request->bolezn;
            $datas->razrad=$request->razrad;
            $datas->progul=$request->progul;
            $datas->vixodn=$request->vixodn;
            $datas->gosob=$request->gosob;
            $datas->komand=$request->komand;
            $datas->vsego=$request->vsego;
            $datas->osnovan=$request->osnovan;
            $datas->sverxuroch=$request->sverxuroch;
            $datas->vsegoch=$request->vsegoch;
            $datas->save();
            

        }
        
        return redirect()->route('create');
    }
   

}
