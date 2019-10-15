@extends('layout.main-layout')

@section('form')

  <div class="back_link">
    <a href="{{ route("post.index") }}">BACK</a>
  </div>

  <form class="create_form" method="post" action="{{ route("post.store")}}">

      @csrf
      @method('POST')

      <div class="form_group">
        <label for="title">Title</label>
        <input type="text" name="title" value="" placeholder="Insert title">
      </div>

      <div class="form_group">
        <label for="description">Description</label>
        <input type="text" name="description" value="" placeholder="Insert description">
      </div>

      <div class="form_group">
        <label for="author">Author</label>
        <input type="text" name="author" value="" placeholder="Insert author">
      </div>

      <button type="submit">SAVE</button>
    </form>
  </div>
@endsection
