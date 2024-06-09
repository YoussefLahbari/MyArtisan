@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h4 class="title_create">Create Service</h4>
    <form action="{{route('admin.service.store')}}" method="post" class="mt-4">
        @csrf
        <div class="row mb-5">
            <div class="col">
                <label for="">Title</label>
                <input type="text" name="Title" id="Title" class="form-control" placeholder="please enter a Title" value="{{old('Title')}}">
                @error('Title')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Description</label>
                <input type="text" name="Description" id="Description" class="form-control" placeholder="please enter a Description" value="{{old('Description')}}">
                @error('Description')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="">Price</label>
                <input type="text" name="Price" id="CodePostal" class="form-control" placeholder="please enter a Price" value="{{old('Price')}}">
                @error('Price')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Categorie</label>
                @if(count($categories) > 0)
                <select name="categorie_id" id="" class="form-control">
                    <option value="">Please Select a Categorie</option>
                    @foreach($categories as $item)
                    <option value="{{$item->id}}" @selected($item->id == old('categorie_id'))>{{$item->Name}}</option>
                    @endforeach 
                </select>
                @else
                <p class="mb-0 alert alert-warning mt-2 fw-bold">Please make sure that you create a category to continue!</p>
                @endif
                @error('categorie_id')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="">Location</label>
                @if(count($locations) > 0)
                <select name="location_id" id="" class="form-control">
                    <option value="">Please Select a Location</option>
                    @foreach($locations as $item)
                    <option value="{{$item->id}}" @selected($item->id == old('location_id'))>{{$item->Name}}</option>
                    @endforeach
                </select>
                @else
                <p class="mb-0 alert alert-warning mt-2 fw-bold">Please make sure that you create a Location to continue!</p>
                @endif
                @error('location_id')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Artisan</label>
                @if(count($artisans) > 0)
                <select name="artisan_id" id="" class="form-control">
                    <option value="">Please Select a artisan</option>
                    @foreach($artisans as $item)
                    <option value="{{$item->id}}" @selected($item->id == old('artisan_id'))>{{$item->user->name}}</option>
                    @endforeach
                </select>
                @else
                <p class="mb-0 alert alert-warning mt-2 fw-bold">Please make sure that you create a artisan to continue!</p>
                @endif
                @error('artisan_id')
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