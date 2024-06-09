@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h3 class="fs-5">Location List</h3>
    <div class="table_container">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary btn-sm" href="{{route('admin.location.create')}}"><i class="fa-solid fa-plus"></i> Add location</a>
        </div>
        @if(count($data) > 0)
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Adress</th>
                    <th>CodePostal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Name}}</td>
                    <td>{{$item->Adress}}</td>
                    <td>{{$item->CodePostal}}</td>
                    <td>
                        <div class="position-relative">
                            <button class="btn btn-sm btn-dark actions">Actions <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="options d-flex flex-column p-2 justify-content-end align-items-stretch">
                                <a class="btn btn-light" href="{{route('admin.location.edit',$item->id)}}">Edit</a>
                                <button class="btn btn-light delete">Delete</button>
                                <form action="{{route('admin.location.destroy',$item->id)}}" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-center mb-0 mt-5"><i class="fa-solid fa-circle-exclamation"></i> No Data Found in table location !</p>
        @endif
    </div>
</div>
<script>
    let actions = document.querySelectorAll('.actions');
    actions.forEach(el => {
        let i = 0;
        let tl_ = gsap.fromTo(el.nextElementSibling, {
            scale: 0
        }, {
            opacity: 1,
            paused: true,
            scale: 1,
            visibility: 'visible',
            y: 0,
            ease: 'back',
            duration: '.3',
            yoyo: true,
        });
        el.addEventListener('click', _ => {
            actions.forEach(el_ => {
                let a = gsap.fromTo(el_.nextElementSibling, {
                    scale: 0
                }, {
                    opacity: 1,
                    paused: true,
                    scale: 1,
                    visibility: 'visible',
                    y: 0,
                    ease: 'back',
                    duration: '.3',
                    yoyo: true,
                });
                a.reverse()
            });
            if (i > 0) {
                tl_.reverse();
                i = 0;
            } else {
                tl_.play();
                i++;
            }
        })
    });
    let delete_btns = document.querySelectorAll('.delete');
    delete_btns.forEach(el => {
        el.addEventListener('click', _ => {
            Swal.fire({
                title: "Are you sure u want to delete this location",
                icon: 'warning',
                showCancelButton: 'true',
                confirmButtonText: 'Delete',
                confirmButtonColor: "#F44336",
                focusConfirm: false,
            }).then(({
                isConfirmed
            }) => {
                if (isConfirmed) {
                    el.nextElementSibling.submit();
                }
            })
        })
    })
</script>
@endsection