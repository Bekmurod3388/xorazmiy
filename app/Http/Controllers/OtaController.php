<?php

namespace App\Http\Controllers;

use App\Models\Ota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'title' => 'required',
            'text' => 'required',

        ]);
        $ota = new Ota();
        $ota->title= $request->title;
        $ota->text = $request->text;

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
    public function update(Request $request,Ota $parent) {

        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',


        ]);



        $parent->update($data);
        return redirect()->route('admin.parent.index')
            ->with('success', 'Muvaffaqiyatli yangilandi');
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
