@extends('admin.layouts.index');
@section('content')
<div class="container_">
    <h4 class="title_create">Artisan Detaills</h4>
    <div class="details_artisan p-3">
        <div class="inf d-flex justify-content-center flex-column align-items-center">
            <img src="{{asset('images/profile.png')}}" alt="" srcset="" style="width: 64px;">
            <h5 class="mt-3">{{$data->user->name}}</h5>
            <h5 class="btn btn-outline-primary btn-sm px-4">Artisan</h5>
        </div>
        <div class="box mb-3 mt-3">
            <h5 class="fw-bold">Skills</h5>
            <p>{{$data->Skills}}</p>
        </div>
        <div class="box mb-3">
            <h5 class="fw-bold">Experience</h5>
            <p>{{$data->Experience}}</p>
        </div>
        <div class="box mb-3">
            <h5 class="fw-bold">Description</h5>
            <p>{{$data->Description}}</p>
        </div>
        <div class="box mb-3">
            <h5 class="fw-bold">Email</h5>
            <p>{{$data->user->email}}</p>
        </div>
        <div class="box mb-3">
            <h5 class="fw-bold">Rating</h5>
            <p>{{$data->Rating}}</p>
        </div>
    </div>
</div>
@endsection