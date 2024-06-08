@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h4 class="title_create">Create Categorie</h4>
    <form action="{{route('admin.categorie.store')}}" method="post" class="mt-4">
        @csrf
        <div class="row mb-5">
            <div class="col">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="please enter a name" value="{{old('name')}}">
                @error('name')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Description</label>
                <textarea type="text" name="description" class="form-control" placeholder="please enter a Description" value="{{old('description')}}" style="height: 250px; resize:none"></textarea>
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