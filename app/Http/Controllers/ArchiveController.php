<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentifyingInformation;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $archives = IdentifyingInformation::where('archive_status', 1)
        ->orderBy('created_at', 'desc')
        ->where(function($query){
        if ($search = request('search'))
        {
            $query->where('name_of_client', 'LIKE', "%{$search}%");
        }
        }) ->paginate(15);
        return view('frontend.archive.archive', compact('archives'));
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
    public function deleteAccount($id)
    {   
        $accountDelete = IdentifyingInformation::findOrFail($id);
        $accountDelete->delete();
        return response()->json(['status'=> 'Successfully Deleted.']);
        
    }

    public function restore($id)
    {
        $restoreUser = IdentifyingInformation::findOrFail($id);
        $restoreUser->archive_status = '0';
        $restoreUser->save();
        return response()->json(['status'=> 'Successfully Restored.']);
    }
}
