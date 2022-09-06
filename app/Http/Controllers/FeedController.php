<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;


use Illuminate\Http\Request;

class FeedController extends Controller
{

    protected $post = null;
    public function __construct(Post $post)

    {
        $this->post = $post;
        $this->middleware('permission:Newsfeed Module', ['only' => ['index', 'store', 'create', 'show', 'edit', 'destroy', 'update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->post->getall();
        // dd($user);

        return view('Feed.index', compact('user'));
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

        $this->validate($request, [
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);


        $data = $request->all();
        // dd($data);

        $post = new Post();

        $post->user_id = auth()->user()->id;
        $post->description = $data['description'];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $post['post_image'] = $filename;
        }
        $post->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::where('user_id', $id)->get();
        // dd( $data);
        return view('Feed.myposts', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::find($id);
        // dd( $data);
        return view('Feed.edit', compact('data'));
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
        $post = Post::find($id);

        $post->user_id = auth()->user()->id;
        $post->description = $request->description;


        if($request->hasFile('image')) {
            File::delete('Image/'.$post->post_image);
            $image             = $request->file('image');
            $ImageUpload        = Image::make($image)->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $name               = time().'.' . $image->getClientOriginalExtension();
            $destinationPath    = public_path('Image/');
            $ImageUpload->save($destinationPath.$name);
        }else{
            $name = $post->post_image;
        }
        $post->post_image=$name;
        $post->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Post::find($id);
        $data->delete();
        return redirect()->back();

    }
}
