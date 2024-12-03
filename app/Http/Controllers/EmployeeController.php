<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function list()
    {
        $data = Employee::get();
        // return $data;
        return view('employee-list', compact('data'));
    }





    public function add()
    {
        return view('employee-create');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        //Validate the incoming request data
        // $request->validate([
        //     'title' => 'required|string| max:255 ',

        //     'content' => 'required |string',
        // ]);



        employee::create($request->all());
        return redirect()->route('employee.list')->with('success', 'employee created successfully');
    }

    public function edit($id)
    {
        $employee = employee::find($id);
        return view('employee-edit', compact('employee'));
    }

    public function destroy($id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->route('employee.list')->with('success', 'employee deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $employee = employee::find($id);
        $employee->update($request->all());
        return redirect()->route('employee.list')->with('success', 'employee updated successfully');
    }

}
