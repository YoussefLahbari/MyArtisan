<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- <x-loading /> -->
    <div class="container_dash">
        <x-navbar />
        <div class="content_container">
            <div class="top d-flex align-items-center justify-content-between">
                <div class="inf">
                    <h3 class="mb-0 fs-5">Welcome {{$name}}</h3>
                </div>
                <div class="profile">
                    <img src="{{asset('images/profile.jpg')}}" alt="" srcset="">
                    <div class="menu">
                        <div class="inf">
                            <img src="{{asset('images/profile.jpg')}}" alt="" srcset="">
                            <div class="data">
                                <h4 class="mb-1 fs-5">{{$name}}</h4>
                                <p class="mb-0">{{$email}}</p>
                            </div>
                        </div>
                        <div class="inf_2">
                            <button class="btn btn-danger">SignOut</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script>
    let profile = document.querySelector('.profile');
    let menu = document.querySelector('.menu');
    let tl = gsap.to(menu, {
        opacity: 1,
        paused: true,
        visibility: 'visible',
        y: 0,
        yoyo: true,
        ease : 'back'
    });
    profile.addEventListener('mouseenter', _ => {
        tl.play();
    });
    menu.addEventListener('mouseleave', _ => {
        tl.reverse();
    })
    
</script>

</html>