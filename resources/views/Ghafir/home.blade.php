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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <script src="//code.tidio.co/wjt2bmnz78jcrwmu8hatj7ygvipvnq6d.js" async></script>
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
        <img src="{{asset('images/shape_1.svg')}}" alt="shape" class="shape_1">
        <img src="{{asset('images/shape_2.svg')}}" alt="shape" class="shape_2">
        <div class="container text-center">
            <div class="inf position-relative">
                <h1 class="mb-3">Book trusted help
                    <br>for home tasks
                </h1>
                <div class="inp d-flex justify-content-center">
                    <input type="text" placeholder="what do you need help with ?" id="inp_search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    <ul class="list p-0 m-0">
                    </ul>
                </div>
            </div>
            <ul class="categories d-flex justify-content-center mt-5">
                <li class="col d-flex flex-column gap-2 active">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <span>Assembly</span>
                </li>
                <li class="col d-flex flex-column gap-2">
                    <i class="fa-solid fa-gear"></i>
                    <span>Mounting</span>
                </li>
                <li class="col d-flex flex-column gap-2">
                    <i class="fa-solid fa-truck"></i>
                    <span>Moving</span>
                </li>
                <li class="col d-flex flex-column gap-2">
                    <i class="fa-solid fa-broom"></i>
                    <span>Cleaning</span>
                </li>
                <li class="col d-flex flex-column gap-2">
                    <i class="fa-solid fa-tree"></i>
                    <span>Outdoor helping</span>
                </li>
                <li class="col d-flex flex-column gap-2">
                    <i class="fa-solid fa-hammer"></i>
                    <span>Home repairs</span>
                </li>
                <li class="col d-flex flex-column gap-2">
                    <i class="fa-solid fa-paintbrush"></i>
                    <span>Painting</span>

                </li>
                <li class="col d-flex flex-column gap-2">
                    <i class="fa-solid fa-fire"></i>
                    <span>Trending</span>
                </li>
            </ul>
            <div class="container_info_categories">
                <div class="btns d-flex gap-4">

                </div>
                <div class="inf position-relative d-flex align-items-center mx-auto">
                    <div class="box_inf">
                        <h3>Assembly</h3>
                        <div class="par">
                            <p><i class="fa-solid fa-check"></i> Assemble or disassemble furniture items by unboxing, building, and any cleanup.</p>
                            <p><i class="fa-solid fa-check"></i> Assemble or disassemble furniture items by unboxing, building, and any cleanup.</p>
                        </div>
                    </div>
                    <img src="https://images.ctfassets.net/vwt5n1ljn95x/2zLfFEV2MrXbcska0MocE7/32575342bd9f30397d58ccb663c71744/Homepage_Assembly.png?w=828&q=75&fm=webp" alt="">
                </div>
            </div>
        </div>
        <div class="bg position-relative">
            <img src="{{asset('images/shape_3.svg')}}" alt="" srcset="">
        </div>
    </section>
    <section class="popular_project">
        <div class="container">
            <h3 class="mb-4">Popular Project</h3>
            <div class="container_boxs">
                <div class="box">
                    <img src="{{asset('images/Assembly.webp')}}" alt="">
                    <h3>Desk assembly</h3>
                </div>
                <div class="box">
                    <img src="{{asset('images/Mounting.jpg')}}" alt="">
                    <h3>Tv Mounting</h3>
                </div>
                <div class="box">
                    <img src="{{asset('images/Moving.webp')}}" alt="">
                    <h3>Moving</h3>
                </div>
                <div class="box">
                    <img src="{{asset('images/Cleaning.avif')}}" alt="">
                    <h3>Apartement Cleaning</h3>
                </div>
                <div class="box">
                    <img src="{{asset('images/Outdoor.webp')}}" alt="">

                    <h3>Gardening & Weeding</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="client_reviews">
        <div class="container">
            <h3 class="text-center mb-5">See what happy customers are saying about Artisan
            </h3>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="box_review">
                            <i class="fa-solid fa-quote-right"></i>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim pariatur fugiat error, qui saepe dolor ex nostrum rerum natus accusamus at iste molestias sint numquam aut? Sint nam quam eos.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{asset('images/user.png')}}" alt="" srcset="">
                                <h4 class="mb-0">Youssef Ghafir</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box_review">
                            <i class="fa-solid fa-quote-right"></i>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim pariatur fugiat error, qui saepe dolor ex nostrum rerum natus accusamus at iste molestias sint numquam aut? Sint nam quam eos.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{asset('images/user.png')}}" alt="" srcset="">
                                <h4 class="mb-0">Youssef Ghafir</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box_review">
                            <i class="fa-solid fa-quote-right"></i>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim pariatur fugiat error, qui saepe dolor ex nostrum rerum natus accusamus at iste molestias sint numquam aut? Sint nam quam eos.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{asset('images/user.png')}}" alt="" srcset="">
                                <h4 class="mb-0">Youssef Ghafir</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box_review">
                            <i class="fa-solid fa-quote-right"></i>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim pariatur fugiat error, qui saepe dolor ex nostrum rerum natus accusamus at iste molestias sint numquam aut? Sint nam quam eos.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{asset('images/user.png')}}" alt="" srcset="">
                                <h4 class="mb-0">Youssef Ghafir</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box_review">
                            <i class="fa-solid fa-quote-right"></i>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim pariatur fugiat error, qui saepe dolor ex nostrum rerum natus accusamus at iste molestias sint numquam aut? Sint nam quam eos.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{asset('images/user.png')}}" alt="" srcset="">
                                <h4 class="mb-0">Youssef Ghafir</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('js/home.js')}}"></script>

</html>