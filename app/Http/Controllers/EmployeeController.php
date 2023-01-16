<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employee = Employee::get();
        // dd($employee);
        return view('dashboard', ['employees' => 'pegawai']);
    }

    public function store(Request $request)
    {

        // $validator = Validator::make($request,[
        //     'employee_name'=>'required|string',
        //     'address'=>'required|string',
        //     'birth_date'=>'required',
        //     'sallary'=>'required'
        // ]);

        // if($validator->fails()){

        // }

        $emp = new Employee();

        $emp->employee_name = $request->employee_name;
        $emp->address = $request->address;
        $emp->brith_date = $request->brith_date;
        $emp->sallary = $request->sallary;

        $emp->save();
    }

    function create()
    {
        return view('formEmployee');
    }
}
