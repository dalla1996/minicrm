<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class CompanyController extends Controller
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
    //    dd($request->all());

        $this->validate($request,[
            'cname'=>'required|max:100|min:5',
            'email'=>'required|max:100|min:5|email',
            'website'=>'required|max:100|min:5',
            'image'=>'required' ,
        //    'image'=>'required|mimes:jpeg,png,jpg,gif|dimensions:width=100px,height=100px',
        ]);

        $company=new company;
        $company->name=$request->cname;
        $company->email=$request->email;
        $company->website=$request->website;
        $company->logo=$request->image;
        $company->save();

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
        
      
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=company::find($id);
        //dd($data);
        return view('updatecompany')->with('details',$data);
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
            'cname'=>'required|max:100|min:5',
            'email'=>'required|max:100|min:5|email',
            'website'=>'required|max:100|min:5',
            'image'=>'required' ,
        //    'image'=>'required|mimes:jpeg,png,jpg,gif|dimensions:width=100px,height=100px',
        ]);
        
    //    dd($request->all());
       $id=$request->id;
       $data=company::find($id);
        
        $data->name=$request->cname;
        $data->email=$request->email;
        $data->website=$request->website;
        $data->logo=$request->image;
        $data->save();

        $datacom=company::paginate(10);
        return view('company')->with('details',$datacom);
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=company::find($id);
        $data->delete();

        return redirect()->back();
    }
}
