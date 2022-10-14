<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use App\Models\ElectronicLibrary;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CircleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circle = Circle::all();
        return view('admin.circle.index',['circles'=>$circle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.circle.create');
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
            'description' => 'required',
            'teacher'=>'required',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../public/images'), $fileName);
        Circle::create([
            'name' => $request->name,
            'description' => $request->description,
            'teacher'=>$request->teacher,
            'img' => $fileName,
        ]);
        return redirect()->route('admin.circle.index')->with('success', 'To\'garak muvaffaqiyatli qo\'shildi.');
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
    public function edit(Circle $circle)
    {
        return view('admin.circle.edit',['circle'=>$circle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Circle $circle)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'teacher'=>'required',
            'img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);
        if ($request->hasFile('file')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../public/images'), $fileName);
            $circle->update([
                'title' => $request->title,
                'description' => $request->description,
                'img' => $fileName,
            ]);
        } else {
            $circle->update($request->all());
        }

        return redirect()->route('admin.circle.index')
            ->with('success', 'To\'garak muvaffaqiyatli tahrirlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Circle $circle)
    {
        $circle->delete();
        return redirect()->route('admin.circle.index')->with('success', 'To\'garak o\'chirildi!');
    }

    public function circle(){
        $circle = Circle::orderBy('id','desc')->get();
        return view('circle',compact('circle'));
    }
}
