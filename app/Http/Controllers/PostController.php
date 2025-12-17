<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('admin.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.posts.create');
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
            'header_uz' => 'required|string|max:255',
            'header_ru' => 'required|string|max:255',
            'header_en' => 'required|string|max:255',

            'description_uz' => 'required|string',
            'description_ru' => 'required|string',
            'description_en' => 'required|string',

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);

        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../storage/app/public/posts'), $fileName);

        Post::create([
            'header_uz' => $request->header_uz,
            'header_ru' => $request->header_ru,
            'header_en' => $request->header_en,

            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,

            'img' => $fileName,
        ]);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, Post $post)
    {
        Post::where('id', $post->id)
            ->update([
                'viewed' => DB::raw('viewed+1'),

            ]);
        return view('news-item.news-item', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'header_uz' => 'required|string|max:255',
            'header_ru' => 'required|string|max:255',
            'header_en' => 'required|string|max:255',

            'description_uz' => 'required|string',
            'description_ru' => 'required|string',
            'description_en' => 'required|string',

            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);

        $data = $request->only([
            'header_uz','header_ru','header_en',
            'description_uz','description_ru','description_en',
        ]);

        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/posts'), $fileName);
            $data['img'] = $fileName;
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Новости успешно удалено');
    }
    public function news() {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('news-item.news')->with('posts', $posts);
    }
}
