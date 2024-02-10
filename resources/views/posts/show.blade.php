@extends('layouts.app')
@section('content')
    @section('title','Show Page')
        
</div>
    <div class="row justify-content-center">
        <div class="col-md-10">   
            <div class="card mt-4">
                <div class="card-header">
                    Post Info
                </div>
                <div class="card-body">
                    <h5 class="card-title">Title:{{$post['title']}} </h5>
                    <p class="card-text">Description:{{$post['description']}} </p>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    Post Creator Info
                </div>
                <div class="card-body">
                    <h5 class="card-title">Name:Mahomud </h5>
                    <p class="card-text">Email:Mahmoud@gmail.come </p>
                    <p class="card-text">Created At:2024-2-5 01:15:00 </p>
                </div>
            </div>
        </div> 
    </div>

</div>
@endsection








