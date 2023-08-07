@extends('layouts.app');

@section('content')
    <div class="card" style="background-color:red">
        <div class="card-header">
          Post Details
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$post['title']}}</h5>
          <p class="card-text">{{$post['Description']}}.</p>
        </div>
      </div>
@endsection
