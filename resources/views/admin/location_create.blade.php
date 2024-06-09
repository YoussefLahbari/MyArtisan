@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h4 class="title_create">Create Location</h4>
    <form action="{{route('admin.location.store')}}" method="post" class="mt-4">
        @csrf
        <div class="row mb-5">
            <div class="col">
                <label for="">Name</label>
                <input type="text" name="Name" id="Name" class="form-control" placeholder="please enter a name" value="{{old('name')}}">
                @error('Name')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Adress</label>
                <input type="text" name="Adress" id="name" class="form-control" placeholder="please enter a Adress" value="{{old('name')}}">
                @error('Adress')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="">CodePostal</label>
                <input type="text" name="CodePostal" id="CodePostal" class="form-control" placeholder="please enter a CodePostal" value="{{old('CodePostal')}}">
                @error('CodePostal')
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