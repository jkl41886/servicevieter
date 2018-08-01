<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\ImageRequest;

use Auth;
class Settings_securityController extends Controller
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
        //
        return $request->question; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $id = Auth::user()->email;
        return $id;
    }

    public function image(ImageRequest $request)
    {
        //
        if($request->hasFile(key: 'image')){
            $imagename = $request->image->getClientOriginalName();
            $request->image->storeAs('public',$imagename);
        }
        $request->user()->avatar = $imagename;
        $request->user()->save();
        return back();        
        // if($request->hasFile(key: 'image')){
        //     $imagename = $request->image->getClientOriginalName();
        //     $request->image->storeAs('public',$imagename);
        // }
        // $request->user()->avatar = $imagename;
        // $request->user()->save();
        // return back();
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
