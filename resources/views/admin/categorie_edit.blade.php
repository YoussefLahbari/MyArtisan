@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h4 class="title_create">Edit categorie</h4>
    <form action="{{route('admin.categorie.update',$data->id)}}" method="post" class="mt-4">
        @csrf
        @method('PUT')
        <div class="row mb-5">
            <div class="col">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="please enter a name" value="{{old('name',$data->Name)}}">
                @error('name')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="please enter a email" value="{{old('email',$data->Description)}}">
                @error('description')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-end"> <button type="submit" class="btn btn-dark px-5">Save</button>
        </div>
    </form>
</div>
@endsection