<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Employeecontroller extends Controller
{
    public function insertform(){
        return view('insertform');
    }
    public function employee_list(){
        $employees = DB::select("select * from Employertable");
       return view("employeesList", ["employeeData"=>$employees]);
    }
    public function edit($id){
        $employee = DB::table('employertable')->where('sno', $id)->first();
        return view('Empedit',["employee"=>$employee]);
    }

    public function delete($id){
        DB::table('Employertable')->where('sno', $id)->delete();
        return redirect()->action([Employeecontroller::class, 'employee_list']);
    }
    public function insert(Request $req){
        $req->validate([
            'Ename' => 'required',
            'Email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dateofjoin' => 'required',
            'salary' => 'required',

        ]);
        $ename = $req->input('Ename');
        $email = $req->input('Email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $DOJ = $req->input('dateofjoin');
        $salary = $req->input('salary');
        DB::insert("INSERT INTO Employertable(Ename,Email,phone,address,Doj,salary)
        VALUES ('$ename','$email','$phone','$address','$DOJ','$salary')");
        return redirect()->action([Employeecontroller::class, 'employee_list']);
    }
    public function update(Request $req){
        $req->validate([
            'Ename' => 'required',
            'Email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dateofjoin' => 'required',
            'salary' => 'required',

        ]);
        $ename = $req->input('Ename');
        $email = $req->input('Email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $DOJ = $req->input('dateofjoin');
        $salary = $req->input('salary');
        DB::table('Employertable')
        ->where('sno',$req->input('sno'))
        ->update(['Ename'=>$ename,
        'Email'=>$email,
        'phone'=>$phone,
        'address'=>$address,
        'Doj'=>$DOJ,
        'salary'=>$salary
        ]);
        return redirect()->action([Employeecontroller::class, 'employee_list']);
    }
}
