@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{route('posts.store')}}" >
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Description</label>
          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="post_creator">Post Creator</label>
            <select class="form-control" name='user_id'>
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>

                @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-success">Create</button>
      </form>
</div>
@endsection
