@extends('admin.layouts.index');
@section('content')
<div class="container_">
    <h4 class="title_create">Categorie Detaills</h4>
    <div class="details_artisan p-3">
        <div class="box mb-3 mt-3">
            <h5 class="fw-bold">Name</h5>
            <p>{{$data->Name}}</p>
            <h5 class="fw-bold">Description</h5>
            <p>{{$data->Description}}</p>
        </div>
    </div>
</div>
@endsection