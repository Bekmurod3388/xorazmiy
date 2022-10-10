<?php

namespace App\Http\Controllers;

use App\Models\Ota;
use Illuminate\Http\Request;

class OtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent = Ota::all();
        return view('admin.parents.index',['parents'=>$parent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'tel'=>'required',
        ]);
        $ota = new Ota();
        $ota->name = $request->name;
        $ota->surname = $request->surname;
        $ota->phone = $request->tel;
        $ota->save();
        return redirect()->route('admin.parent.index')->with('success', 'bajarildi');
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
    public function edit(Ota $parent)
    {
        return view('admin.parents.edit',['parent'=>$parent]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Ota $parent)
    {
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'tel'=>'required',
        ]);
        $parent->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'phone'=>$request->tel,
        ]);
        return redirect()->route('admin.parent.index')
            ->with('success', ' Muvaffaqiyatli tahrirlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ota $parent)
    {
        $parent->delete();
        return redirect()->route('admin.parent.index')->with('success', 'o\'chirildi!');
    }
}
