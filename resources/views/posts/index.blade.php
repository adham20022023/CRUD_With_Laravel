@extends('layouts.app')

@section('content')
    <a class='btn btn-success' href="{{route('posts.create')}}">Create</a>
    <!-- Center the table on the screen -->
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-striped mt-5" style="width: 80%;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post )
                {{-- @dd($post->myuser_relation); --}}
                <tr>
                    <td scope="row">{{$post['id']}}</td>
                    <td>{{$post['title']}}</td>

                    <td>{{$post->myuser_relation?$post->myuser_relation->name:"User not Found"}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href='{{route('posts.show' ,['post' =>$post['id']])}}' class="btn btn-info">view</a>
                        <form action="{{ route('posts.edit', ['post' => $post['id']]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('get')
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                        <form action="{{ route('posts.destroy', ['post' => $post['id']]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
