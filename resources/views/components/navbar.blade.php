<div class="navbar_dash">
    <h3 class="d-flex mb-0 gap-2"><i class="fa-solid fa-user-tie"></i> Admin Dash</h3>
    <ul class="d-flex flex-column gap-3">
        <li><a href="{{route('admin.overview')}}" data-type="home"><i class="fa-solid fa-house"></i> Overview</a></li>
        <li><a href="{{route('admin.artisan.index')}}" data-type="artisan"><i class="fa-solid fa-user-tie"></i> Artisan</a></li>
        <li><a href="{{route('admin.client.index')}}" data-type="client"><i class="fa-regular fa-user"></i> Client</a></li>
        <li><a href="{{route('admin.categorie.index')}}" data-type="categorie"><i class="fa-solid fa-list"></i> Categories</a></li>
        <li><a href="{{route('admin.location.index')}}" data-type="location"><i class="fa-solid fa-location-crosshairs"></i> Locations</a></li>
        <li><a href="{{route('admin.service.index')}}" data-type="service"><i class="fa-solid fa-truck-fast"></i></i> Services</a></li>
    </ul>
</div>
<script>
    let list = document.querySelectorAll('.navbar_dash > ul > li > a');
    list.forEach(el => {
        let pathname = window.location.pathname;
        if(pathname.includes(el.getAttribute('data-type'))) {
            el.classList.add('active');
        }
    })
</script>