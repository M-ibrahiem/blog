@extends('layouts.app')
@section('content')
    @section('title','Edit')

    

    <form method="POST" action="{{route('posts.update',1)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="post_creator" class="form-label">Post Creator</label>
            <select class="form-control" id="post_creator" name="post_creator">
                <option value="1">Mahmoud</option>
                <option value="2">Ibrahiem</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection