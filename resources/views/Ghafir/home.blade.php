<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{route('home')}}" class="logo">Artisan</a>
            <ul class="d-flex align-items-center list-unstyled gap-5 p-0 m-0">
                <li><a href="">Services</a></li>
                <li><a href="">Sign up / Log in</a></li>
                <li><a href="" class="btn btn-outline-success">Become a tasker</a></li>
            </ul>
        </div>
    </header>
    <section class="discover position-relative">
        <div class="container">
            <img src="{{asset('images/shape_1.svg')}}" alt="shape" class="shape_1">
            <img src="{{asset('images/shape_2.svg')}}" alt="shape" class="shape_2">
        </div>
    </section>
</body>

</html>