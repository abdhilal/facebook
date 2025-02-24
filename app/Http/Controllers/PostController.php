<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {

        $validated = $request->validate(


            [
                'post' => 'nullable|string',
                'media' => 'nullable|image'

            ]
        );

        if ($request->hasFile('media')) {
            $img = $request->file('media');


            $imgName = time() . "." . $img->getClientOriginalExtension();


            $request->media->move('img', $imgName);

            $post = Post::create(
                [
                    'post' => $request->post,
                    'media' => $imgName,
                    'user_id' => Auth::id()
                ]
            );
        } else {




            $post = Post::create([
                'post' => $request->post,
                'media' => null,
                'user_id' => Auth::id()
            ]);
        };


        return redirect()->route('show');
    }





    public function show(Post $post)
    {
        $post = Post::with('comments')->orderBy('updated_at', 'desc')->get();
        return view('welcome', compact('post'));
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', compact('post'));
    }




    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        $post->post = $request->post;

        if ($request->hasFile('media')) {

            $img = $request->file('media');


            $imgName = time() . "." . $img->getClientOriginalExtension();


            $request->media->move('img', $imgName);
            $post->media = $imgName;
        } else {

            $post->media = $post->media;
        }


        $post->save();
        return redirect()->route('show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->media && file_exists(public_path('img/' . $post->media))) {
            unlink(public_path('img/' . $post->media));
        }

        $post->delete();
        return redirect()->route('show');
    }


    public function search(Request $request)
    {

        $item = Post::where('post', 'LIKE', '%' . $request->item . '%')->get();


        return view('view_search', compact('item'));
    }
}
