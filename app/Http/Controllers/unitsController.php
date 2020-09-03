<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class unitsController extends Controller
{
    public function index()
    {

    $index = DB::table('units')->get();
    return view('/units/index',['units' => $index]);
    }
    public function create()
    {
        return view('/units/create');
    }

    public function store(Request $request)
    {
        $units = $request->except('_token');
        DB::table('units')->insert($units);
        return redirect('/units');
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

    public function edit($id)
    {
         $units =  DB::table('units')->where('id',$id)->first();
         return view('/units/edit', ['units'=>$units]);
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
         $units = $request->except('_token');
         DB::table('units')->where('id',$id)->update($units);
         return redirect('/units');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('units')->where('id',$id)->delete();
        return redirect('/units');
    }
}
