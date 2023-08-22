@extends('layouts.app')
@section('content')
<div class="container">
{{-- @dd($post) --}}
    <form method="POST" action="{{route('posts.update',['post'=>$post])}}" >
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input  value="{{$post['title']}}" name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Description</label>
          <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$post['description']}}</textarea>
        </div>
        <div class="form-group">
            <label for="post_creator">Post Creator</label>
            <select class="form-control" name='user_id'>
                @foreach ($users as $user)
                <option value="{{ $user->id }}" @if ($user->id === $post['user_id']) selected @endif>{{ $user->name }}</option>
                @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
</div>
@endsection
