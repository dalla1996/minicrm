<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'fname'=>'required|max:100|min:5',
            'lname'=>'required|max:100|min:5',
            'cname'=>'required|max:100|min:5',
            'email'=>'required|max:100|min:5|email',
            'phone'=>'required|max:10|min:10',

        ]);
       //dd($request->all());   
        $employee=new employee;
        $employee->fname=$request->fname;
        $employee->lname=$request->lname;
        $employee->cname=$request->cname;
        $employee->c_id=$request->cid;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->save();
        
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=employee::find($id);
        //dd($data);
      return view('employeeupdate')->with('details',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'fname'=>'required|max:100|min:5',
            'lname'=>'required|max:100|min:5',
            'cname'=>'required|max:100|min:5',
            'email'=>'required|max:100|min:5|email',
            'phone'=>'required|max:10|min:10',

        ]); 

        $id=$request->id;
        $data=employee::find($id);
        
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->cname=$request->cname;
        $data->c_id=$request->cid;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->save();

        $empdata=employee::all();
        return view('employee')->with('details',$empdata);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=employee::find($id);
        $data->delete();

        return redirect()->back();
    }
}
