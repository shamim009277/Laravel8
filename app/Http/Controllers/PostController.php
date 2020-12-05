<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Models\Post;
use App\Models\Employee;
use Excel;

class PostController extends Controller
{
    public function showpost(){
        
        $posts = Post::paginate(5);
        return view('posts',compact('posts'));
    }

    public function showForm(){

    	return view('upload');
    }

    public function uploadFile(Request $request){
    	$request->file->store('public');
    	return "File Uploaded Successfully";
    }

    public function addEmployee(){

    	$employees = [
            ["name"=>"Alice","email"=>"alice@gmail.com","phone"=>"02974658","salary"=>"12000","department"=>"ABC Department"],
            ["name"=>"Anis","email"=>"anis@gmail.com","phone"=>"02974658","salary"=>"12000","department"=>"ABC Department"],
            ["name"=>"Mokul","email"=>"mokul@gmail.com","phone"=>"02974658","salary"=>"12000","department"=>"ABC Department"],
            ["name"=>"Bindu","email"=>"bindu@gmail.com","phone"=>"02974658","salary"=>"12000","department"=>"ABC Department"],
    	];

    	Employee::insert($employees);
    	return "Employee Added";
    }

    public function exportIntoExcel(){

    	return Excel::download(new EmployeeExport, 'employee.xlsx');
    }

    public function exportIntoCsv(){

    	return Excel::download(new EmployeeExport,'employee.csv');
    }
}
