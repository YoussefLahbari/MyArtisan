@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h4 class="title_create">Edit Artisan</h4>
    <form action="{{route('admin.artisan.update',$data->id)}}" method="post" class="mt-4">
        @csrf
        @method('PUT')
        <div class="row mb-5">
            <div class="col">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="please enter a name" value="{{old('name',$data->user->name)}}">
                @error('name')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Email</label>
                <input type="text" name="email" id="name" class="form-control" placeholder="please enter a email" value="{{old('email',$data->user->email)}}">
                @error('email')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="">Password</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="please enter a password" value="{{old('password')}}">
                @error('password')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Skills</label>
                <textarea type="text" name="skills" id="name" class="form-control" placeholder="please enter Your Skills" style="height: 200px;resize : none">{{old('skills',$data->Skills)}}</textarea>
                @error('skills')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="">Experience</label>
                <input type="text" name="experience" id="password" class="form-control" placeholder="please enter Experiences" value="{{old('experience',$data->Experience)}}">
                @error('experience')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="col">
                <label for="">Description</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="please enter Your Skills" style="height: 200px;resize : none">{{old('description',$data->Description)}}</textarea>
                @error('description')
                <p class="mb-0 mt-1 px-1 text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="">Rating</label>
                <input type="text" name="rating" id="Rating" class="form-control" placeholder="please enter a rating (1.00 / 10)" value="{{old('rating',$data->Rating)}}">
                @error('rating')
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
<script>
    let inp_pass = document.getElementById('password');
    let show = true;
    inp_pass.addEventListener('focus', _ => {
        if (show) {
            Swal.fire({
                title: "If You dont want to change the password keep it empty !",
                confirmButtonText:'I Understand',
                showConfirmButton: true,
                allowOutsideClick: false,
                icon: "warning",
            }).then((isConfirmed)=> {
                if(isConfirmed) {
                    show = false;
                }
            });
        }
    })
</script>
@endsection