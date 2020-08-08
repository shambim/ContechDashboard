<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\UrlGenerator;

use route;

use GuzzleHttp\Client;

use Exception;

class DashboardController extends Controller
{
    function __construct(){
       
    }
    function index(){
        return view('dashboard');
    }

    function lists(){
        
        try{
            $client = new Client();
            $res = $client->request('GET', getenv('BASE_URL').'employee_lists');
            $res->getStatusCode();
            
            $employee_result=json_decode($res->getBody());
            $employee_lists=$employee_result->result;
            
            return view('employee/lists',compact('employee_lists'));
        }catch (Exception $e) {
            abort(500, 'Internal server error');
        }



    }


    function create(Request $request){
        
        return view('employee/create');
    }

    function delete($employee_id){
        $client = new Client();
        $url = getenv('BASE_URL')."employee_delete/".$employee_id;
        $request = $client->delete($url);

        if($request->getStatusCode()==200){
            session()->flash('msg', 'Employee deleted Successfully.');
            return redirect('Employee/lists');
        }
        
    }

    function store(Request $request){
        $client = new Client();

        $all_input=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'age'=>$request->input('age'),
            'phone_number'=>$request->input('phone_number'),
            'department'=>$request->input('department'),
            'salary'=>$request->input('salary')
        ];
        
        try{
            $client = new Client();
            $res=$client->request('POST', getenv('BASE_URL').'add_employee', [
                'form_params' => $all_input]);
            if($res->getStatusCode()==200){
                session()->flash('msg', 'Employee added Successfully.');
                return redirect('Employee/lists');
            }
        }catch (Exception $e) {
            $error=$e->getResponse()->getBody()->getContents();
            session()->flash('err_msg', $error);
            return redirect('Employee/create');

        }            
       
        
    }
}
