@extends('layouts.app')
@section('title','index')
@section('content')

  <div class="container mt-4">
    <div class="text-center">
        <a href="{{route('posts.create')}}" type="button" class="btn btn-success "> Create Post</a>
    </div>
  </div>
  </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <table class="table mt-4">
            <thead>
            <tr >
                <th scope="col">#</th>
                <th scope="col"> TheTitle</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created AT</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
              @foreach ($posts as $post)
                {{-- @dd($posts,$post) --}}
                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->posted_by}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                      <a href="{{route('posts.show',$post->id)}}" class="btn btn-info">View</a>
                      <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                      
                    <form style="display: inline" method="POST" action="{{route('posts.destory',$post->id)}}">
                      @csrf
                      @method('delete')

                      <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                    </td> 
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      {{-- </div> --}}
@endsection
