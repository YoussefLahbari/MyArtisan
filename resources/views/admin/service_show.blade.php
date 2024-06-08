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
            <p>{{$data->categorie->Name}}</p>
            <h5 class="fw-bold">Location</h5>
            <p>{{$data->location}}</p>
            <h5 class="fw-bold">Title</h5>
            <p>{{$data->Title}}</p>
            <h5 class="fw-bold">Title</h5>
            <p>{{$data->Title}}</p>


        </div>
    </div>
</div>
@endsection