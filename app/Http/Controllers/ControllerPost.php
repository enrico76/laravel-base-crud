<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ControllerPost extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $posts = Post::all();
    return view("page.postIndex", compact("posts"));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view("page.postCreate");
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $validatedData = $request -> validate([

      "title" => "required",
      "description" => "required",
      "author" => "required"
    ]);

    $post = Post::create($validatedData);
    return redirect("/postIndex");
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
  public function edit($id)
  {
    $post = Post::findOrFail($id);

    return view("page.postEdit", compact("post"));
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
    $validatedData = $request -> validate([

      "title" => "required",
      "description" => "required",
      "author" => "required"
    ]);

    Post::whereId($id) -> update($validatedData);
    return redirect("/postIndex");
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $post = Post::findOrFail($id);
    $post -> delete();

    return redirect("/postIndex");
  }
}
