@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h3 class="fs-5">Service List</h3>
    <div class="table_container">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary btn-sm" href="{{route('admin.service.create')}}"><i class="fa-solid fa-plus"></i> Add service</a>
        </div>
        @if(count($data) > 0)
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category Id</th>
                    <th>Location Id</th>
                    <th>Artisan Id</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Title}}</td>
                    <td>{{$item->Description}}</td>
                    <td>{{$item->Price}}</td>
                    <td>{{$item->categorie_id}}</td>
                    <td>{{$item->location_id}}</td>
                    <td>{{$item->artisan_id}}</td>
                    <td>
                        <div class="position-relative">
                            <button class="btn btn-sm btn-dark actions">Actions <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="options d-flex flex-column p-2 justify-content-end align-items-stretch">
                                <a class="btn btn-light" href="{{route('admin.service.edit',$item->id)}}">Edit</a>
                                <a class="btn btn-light" href="{{route('admin.service.show',$item->id)}}">Show</a>
                                <button class="btn btn-light delete">Delete</button>
                                <form action="{{route('admin.service.destroy',$item->id)}}" method="post" style="display: none;">
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
        <p class="text-center mb-0 mt-5"><i class="fa-solid fa-circle-exclamation"></i> No Data Found in table service !</p>
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
                title: "Are you sure u want to delete this service",
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