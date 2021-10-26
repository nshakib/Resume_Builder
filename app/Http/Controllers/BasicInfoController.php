<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-26 19:28:54
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-26 21:56:05
 */

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use Illuminate\Http\Request;

class BasicInfoController extends Controller
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
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255',
            'profession' => 'required|max:255',
            'email' => 'required|email|unique:basic_infos',
            'phone' => 'required|integer',
            'website' => 'required|url',
            'address' => 'required|max:255',
            'post_code' => 'required|integer',
            'division' => 'required|max:255',
        ],[
            'first_name.required' => "Field Must not be empty",
            'first_name.string' => "Field Must not be empty",
            'profession.required' => "Field Must not be empty",
            'email.required' => "Field Must not be empty",
            'email.email' => "Enter a valid email",
            'phone.required' => "Field Must not be empty",
            'phone.integer' => "Enter a valid phone number",
            'website.required' => "Field Must not be empty",
            'website.URL' => "Enter a valid url",
            'post_code.required' => "Field Must not be empty",
            'post_code.required' => "Enter a valid post code",
            'division.required' => "Field Must not be empty",
        ]);

        $bInfo = new BasicInfo();
        $bInfo->first_name = $request->first_name;
        $bInfo->last_name = $request->last_name;
        $bInfo->profession = $request->profession;
        $bInfo->email = $request->email;
        $bInfo->phone = $request->phone;
        $bInfo->website = $request->website;
        $bInfo->address = $request->address;
        $bInfo->post_code = $request->post_code;
        $bInfo->division = $request->division;
        if($bInfo->save()){
            return redirect("/education/create");
        }else{
            echo 'error';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function show(BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicInfo $basicInfo)
    {
        //
    }
}
