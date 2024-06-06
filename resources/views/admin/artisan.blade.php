@extends('admin.layouts.index');

@section('content')
<div class="container_">
    <h3 class="fs-5">Artisan List</h3>
    <div class="table_container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> Add Artisan</button>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Skills</th>
                    <th>Experience</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>aaaaaaaaaaa</td>
                    <td>sdfsd</td>
                    <td>12</td>
                    <td>
                        <div class="position-relative">
                            <button class="btn btn-sm btn-dark actions">Actions <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="options d-flex flex-column p-2 justify-content-end align-items-stretch">
                                <button class="btn btn-light">Edit</button>
                                <button class="btn btn-light">Show</button>
                                <button class="btn btn-light">Delete</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    let actions = document.querySelectorAll('.actions');
    actions.forEach(el => {
        let i = 0;
        let tl_ = gsap.fromTo(el.nextElementSibling, {scale : 0},{
            opacity: 1,
            paused: true,
            scale : 1,
            visibility: 'visible',
            y: 0,
            ease : 'back',
            duration : '.3',
            yoyo: true,
        });
        el.addEventListener('click', _ => {
            if (i > 0) {
                tl_.reverse();
                i = 0;
            } else {
                tl_.play();
                i++;
            }
        })
    });
</script>
@endsection