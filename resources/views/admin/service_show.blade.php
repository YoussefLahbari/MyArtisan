@extends('admin.layouts.index');
@section('content')
<div class="container_">
    <h4 class="title_create">Service Detaills</h4>
    <div class="details_artisan p-3">
        <div class="box mb-3 mt-3">
            <h5 class="fw-bold">Title</h5>
            <p>{{$data->Title}}</p>
            <h5 class="fw-bold">Description</h5>
            <p>{{$data->Description}}</p>
            <h5 class="fw-bold">Price</h5>
            <p>{{$data->Price}}</p>
            <h5 class="fw-bold">Categorie</h5>
            <p>{{$data->categorie->Name}} <a class="link-underline-primary" href="{{route('admin.categorie.show',$data->categorie->id)}}">see more details</a>
            </p>
            <h5 class="fw-bold">Location</h5>
            <p>{{$data->location->Name}} <a class="link-underline-primary" href="{{route('admin.location.show',$data->location->id)}}">see more details</a></p>
            <h5 class="fw-bold">Artisan</h5>
            <p>{{$data->artisan->user->name}} <a class="link-underline-primary" href="{{route('admin.artisan.show',$data->artisan->id)}}">see more details</a></p></p>
        </div>
    </div>
</div>
@endsection