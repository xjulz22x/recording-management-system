<?php

namespace App\Http\Controllers;
use App\Models\IdentifyingInformation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countBurial = IdentifyingInformation::where('burial_status', 1)->count();
        $countMedical = IdentifyingInformation::where('medical_status', 1)->count();
        $countStudentAssistance = IdentifyingInformation::where('student_assistance_status', 1)->count();
        $countTransportation = IdentifyingInformation::where('transportation_status', 1)->count();
        $results = IdentifyingInformation::orderBy('created_at', 'desc')->where(function($query){
        if ($search = request('search'))
        {
            $query->where('name_of_client', 'LIKE', "%{$search}%");
        }
        })->paginate(5);


       
        return view('frontend.index', compact('countBurial', 'countMedical', 'countStudentAssistance', 'countTransportation', 'results'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
