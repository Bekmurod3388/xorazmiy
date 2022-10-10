<?php

namespace App\Http\Controllers;

use App\Models\ElectronicLibrary;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ElectronicLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = ElectronicLibrary::orderBy('id','desc')->get();
        return view('admin.electroniclibrary.index',compact('library'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.electroniclibrary.create');
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
            'desc' => 'required',
            'file' => 'required|file|mimes:pdf,docs,docx|max:10000',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->file->extension();
        $request->file->move(public_path('../public/books'), $fileName);
        ElectronicLibrary::create([
            'title' => $request->title,
            'description' => $request->desc,
            'file' => $fileName,
        ]);
        return redirect()->route('admin.electroniclibrary.index')->with('success', 'Kitob muvaffaqiyatli qo\'shildi.');
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
    public function edit(ElectronicLibrary $library)
    {
//        dd($library);
        return view('admin.electroniclibrary.edit',['library'=>$library]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElectronicLibrary $library)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'file'=>''
        ]);
        if ($request->hasFile('file')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('../public/books'), $fileName);
            $library->update([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $fileName,
            ]);
        } else {
            $library->update($request->all());
        }


        return redirect()->route('admin.electroniclibrary.index')
            ->with('success', 'Ma\'lumotlar muvaffaqiyatli yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
//        dd($library);
        $library = ElectronicLibrary::find($id);
        $library->delete();
        return redirect()->route('admin.electroniclibrary.index')->with('success','Kitob muvaffaqiyatli o\'chirildi');
    }
}
