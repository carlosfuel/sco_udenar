<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{    
    public function index()
    {
         $post = Post::find(3);

        $category = Category::find(3);

        dd($category->posts[1]->title); 


       
       
       /*  return response()->json([
            'nombre' => 'Juan Carlos',
            'departamento' =>'Nariño',

        ]);  */

        
        //$post = Post:: find(4)->delete();
        //dd($post);
        /*
        $post = Post::find(2);
        
        //dd($post);

        $post->update(
            [
                'title' => 'test title NEW',
                'slug' => 'test slug',
                'content' => 'test content',
                'category_id' => 1,
                'description' => 'test description',
                'posted' => 'not',
                'image' => 'test image',
            ]
        ); */

        

        /* Post::create(
            [
                'title' => 'test title',
                'slug' => 'test slug',
                'content' => 'test content',
                'category_id' => 1,
                'description' => 'test description',
                'posted' => 'not',
                'image' => 'test image',
            ]
        );  */  
        
        //return " <h1> index </h1>";
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
