<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::all();

        return response()->json(["message" => "Correct request", "data" => $data]);
    }

    /**
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $post)
    {
        $data = $post;

        return response()->json($data);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if (!empty($request->file('thumbnail'))) {
            $file_name = $request->file('thumbnail')->getClientOriginalName();
            $save_file = $request->file('thumbnail')->storeAs('posts', $file_name);
            $input['thumbnail'] = $save_file;
        }

        News::create($input);

        return response()->json(['message' => 'Item created correctly']);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , News $post)
    {
        $input = $request->all();

        if (!empty($request->file('thumbnail'))) {
            if (Storage::exists($post->thumbnail)) {
                Storage::delete($post->thumbnail);
            }

            $file_name = $request->file('thumbnail')->getClientOriginalName();
            $save_file = $request->file('thumbnail')->storeAs('posts', $file_name);
            $input['thumbnail'] = $save_file;
        }

        $post->update($input);

        return response()->json(['message' =>$input]);
    }

    /**
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $post)
    {
        if (!is_null($post->thumbnail)) {
            if (Storage::exists($post->thumbnail)) {
                Storage::delete($post->thumbnail);
            }
        }
        $post->delete();

        return response()->json(['message' => 'Information deleted correctly']);
    }
}
