<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\Post\PostResource;

class PostController extends Controller
{
    private $_postService;

    public function __construct(PostService $postService)
    {
        // $this->middleware('auth:api', ['except' => ['publicRootMenus']]);
        $this->_postService = $postService;
    }
 
    public function index()
    {
        //
        return new PostResource($this->_postService->show());
        // return (" hellow");
    }

   
    public function create()
    {
        //
    }

   
    public function store(StorePostRequest $request)
    {
        //
    }


    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

 
    public function destroy(Post $post)
    {
        //
    }
}
