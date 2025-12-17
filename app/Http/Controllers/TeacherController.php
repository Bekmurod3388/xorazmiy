<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Veteran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Teacher::orderBy('id', 'desc')->get();
        return view('admin.teacher.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.teacher.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',

            'desc_uz' => 'required|string',
            'desc_ru' => 'nullable|string',
            'desc_en' => 'nullable|string',

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);

        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();

        // ✅ teacher papka
        $request->img->move(public_path('../storage/app/public/teacher'), $fileName);

        Teacher::create([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,

            'desc_uz' => $request->desc_uz,
            'desc_ru' => $request->desc_ru,
            'desc_en' => $request->desc_en,

            'img' => $fileName,
        ]);

        return redirect()->route('admin.teacher.index')->with('success', "O'qituvchi qo'shildi");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, Teacher $teacher)
    {
        return view('teacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit', ['posts'=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',

            'desc_uz' => 'required|string',
            'desc_ru' => 'nullable|string',
            'desc_en' => 'nullable|string',

            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);

        $data = $request->only([
            'name_uz','name_ru','name_en',
            'desc_uz','desc_ru','desc_en',
        ]);

        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/teacher'), $fileName);
            $data['img'] = $fileName;
        }

        $teacher->update($data);

        return redirect()->route('admin.teacher.index')->with('success', "O'qituvchi yangilandi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.teacher.index')
            ->with('success', 'O\'qituvchi o\'chirildi');
    }
    public function teachers() {
        $posts = Teacher::orderBy('id', 'desc')->get();
        return view('teachers')->with('posts', $posts);
    }
}
