<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentifyingInformation;

class BurialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $burials = IdentifyingInformation::where('burial_status', 1)
        ->orderBy('created_at', 'desc')
        ->where('archive_status', 0)
        ->where(function($query){
        if ($search = request('search'))
        {
            $query->where('name_of_client', 'LIKE', "%{$search}%");
        }
        })->paginate(10);
        return view('frontend.burial.burial-list', compact('burials'));
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

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

    public function archive($id)
    {
        $archiveUser = IdentifyingInformation::findOrFail($id);
        $archiveUser->archive_status = '1';
        $archiveUser->save();
        return response()->json(['status'=> 'Successfully Archived.']);
        
    }
}
