<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use Carbon\Carbon;
session_start();

class BP extends Controller
{

	//Admin Login
	public function adminlogin(Request $request){

        $email=$request->email;
        $password=$request->password;

        if ($email=="shuvo35-1516@diu.edu.bd" && $password=="root") {
        	return view('/Admin');
        }
        else{
            session()->flash('Message','Invalid Username or Password');
            return redirect('/AdminLogin');
        }

    }

    //Client Log in
    public function Clientlogin(Request $request)
    {
      $c_email=$request->c_email;
      $c_pass=$request->c_pass;

      $info=DB::table('client')->where('c_email',$c_email)
                                  ->where('c_pass',$c_pass)
                                  ->first();
      if ($info) {
            // session()->put('user_email',$info->email);
          return redirect('/ClientShow');
      }else{
          session()->flash('Message','Invalid Client Email or Password');
          return redirect('/ClientLogin');
      }
    }

//Manager Login here
    public function Managerlogin(Request $request)
    {
      $m_email=$request->m_email;
      $m_pass=$request->m_pass;

      $info=DB::table('manager')->where('m_email',$m_email)
                                  ->where('m_pass',$m_pass)
                                  ->first();
      if ($info) {
           session()->put('m_name',$info->m_name);
          return redirect('/Manager');
      }else{
          session()->flash('Message','Invalid Manager Email or Password');
          return redirect('/ManagerLogin');
      }
    }



    //Add manager here
    public function addmanager(Request $request)
    {
    	
        $data=array();
        $data['m_id']=$request->m_id;
        $data['m_name']=$request->m_name;
        $data['m_email']=$request->m_email;
        $data['m_pass']=$request->m_pass;
        $data['m_age']=$request->m_age;
        $data['m_phone']=$request->m_phone;
        $data['m_date']=$request->m_date;
        $data['m_post']=$request->m_post;
        $data['m_area']=$request->m_area;
        $data['free']=$request->free;

        DB::table('manager')->insert($data);

        Session::put('message','Manager Added successfully');
        return Redirect::to('/ManegerDetails');

    }

    // Add worker here
    public function addworker(Request $request)
    {
    	
        $data=array();
        $data['w_id']=$request->w_id;
        $data['w_name']=$request->w_name;
        $data['w_email']=$request->w_email;
        $data['w_age']=$request->w_age;
        $data['w_phone']=$request->w_phone;
        $data['w_date']=$request->w_date;
        $data['w_area']=$request->w_area;
        $data['free']=$request->free;

        DB::table('worker')->insert($data);

        Session::put('message','Worker Added successfully');
        return Redirect::to('/WorkerDetails');

    }

    // Add Client here
    public function addclient(Request $request)
    {
    	
        $data=array();
        $data['c_id']=$request->c_id;
        $data['c_name']=$request->c_name;
        $data['c_email']=$request->c_email;
        $data['c_pass']=$request->c_pass;
        $data['c_phone']=$request->c_phone;


        DB::table('client')->insert($data);

        Session::put('message','Account Added successfully');
        return Redirect::to('/ClientReg');

    }
//Add service request
    public function AddService(Request $request)
    {
        
        $data=array();
        $data['s_id']=$request->s_id;
        $data['s_name']=$request->s_name;
        $data['s_phone']=$request->s_phone;
        $data['dscp']=$request->dscp;
        $data['c_floor']=$request->c_floor;
        $data['n_floor']=$request->n_floor;
        $data['c_add']=$request->c_add;
        $data['n_add']=$request->n_add;

        DB::table('service')->insert($data);

        Session::put('message','Request Added successfully');
        return Redirect::to('/ClientShow');

    }
    //Edit Service information
    public function ServiceUpdate(Request $request,$s_id)
    {
        $prfl=array();
        $prfl['cost']=$request->cost;
        $prfl['m_id']=$request->m_id;
        $prfl['w_id']=$request->w_id;


        DB::table('service')->where('s_id',$s_id)->update($prfl);

        Session::flash('message','Information Update successfully');
        return Redirect::to('/EditService');

}
    //View manager here
    public function ManegerDetails(){
        $Manager=DB::table('manager')->get();

        return view('ManegerDetails')->with('Showdata',$Manager);
    }
    //View worker here
    public function WorkerDetails(){
        $Worker=DB::table('worker')->get();

        return view('WorkerDetails')->with('Showdata',$Worker);
    }
//Client show service request
    public function ClientShow(){
        $servicereq=DB::table('service')->get();

        return view('ClientShow')->with('Showdata',$servicereq);
    }

    //Admin's service request show
   public function EditService(){
        $servicereq=DB::table('service')->get();

        return view('EditService')->with('Showdata',$servicereq);
    } 
//Specific Manager view
    public function Managerview(){
    $Showdata=DB::table('manager')->get();
        $servicereq=DB::table('service')->get();

        return view('Manager',compact('Showdata','servicereq'));
    }
    //Show service data for editting in a form
    public function ServiceEditPage($s_id)
    {
        $datainfo=DB::table('service')->where('s_id',$s_id)->first();


       return view('ServiceEditPage')->with('Showdata',$datainfo);


    }
    // Search show page
    public function searchshow(Request $request)
    {
        
        // $data=array();
        // $data['s_id']=$request->s_id;
        // $data['s_name']=$request->s_name;
        // $data['s_phone']=$request->s_phone;
        // $data['dscp']=$request->dscp;
        // $data['c_floor']=$request->c_floor;
        // $data['n_floor']=$request->n_floor;
        // $data['c_add']=$request->c_add;
        $data['m_id']=$request->m_id;

        $servicereq=DB::table('service')->where('m_id',$data)->get();

        Session::put('message','Here is your search result');
        return view('ManagerShow',compact('Showdata','servicereq'));

    }
    
//Admin Service Details
    public function ServiceDetails(){

 
        $servicereq=DB::table('service')->get();

        return view('ServiceDetails')->with('Showdata',$servicereq);
    }


    //Delete manager Information
        public function DeleteManager($m_id)
    {
        $datainfo=DB::table('manager')->where('m_id',$m_id)->delete();

        return redirect()->back();
    }

    //Delete manager Information
        public function RemoveService($s_id)
    {
        $datainfo=DB::table('service')->where('s_id',$s_id)->delete();

       return redirect()->back();
    }

    //Delete worker Information
        public function Removeworker($w_id)
    {
        $datainfo=DB::table('worker')->where('w_id',$w_id)->delete();

       return redirect()->back();
    }

}
