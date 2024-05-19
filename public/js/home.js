// Function of search
const services = [
    "General Furniture Assembly",
    "Crib Assembly",
    "PAX Assembly",
    "Bookshelf Assembly",
    "Desk Assembly",
    "Hang Art, Mirror & Decor",
    "Install Blinds & Window Treatments",
    "Mount & Anchor Furniture",
    "Install Shelves, Rods & Hooks",
    "Other Mounting",
    "TV Mounting",
    "Truck-Assisted Help Moving",
    "Trash & Furniture Removal",
    "Rearrange Furniture",
    "Heavy Lifting & Loading",
    "Move Out Clean",
    "Apartment Cleaning",
    "Deep Clean",
    "Party Clean Up",
    "Branch & Hedge Trimming",
    "Gardening & Weeding",
    "Appliance Installation & Repairs",
    "Wall Repair",
    "Plumbing Help",
    "Flooring & Tiling Help",
    "Outdoor Painting",
    "Accent Wall Painting",
    "Wallpaper Removal",
];
let inp_search = document.querySelector("#inp_search");
let list_search = document.querySelector(".list");
let tl = gsap.timeline({ paused: true });
let tl_animate = tl.to(list_search, { autoAlpha: 1 });
inp_search.addEventListener("focus", (e) => {
    if (e.target.value != "") {
        tl_animate.play();
        searchFunc(e);
    } else {
        list_search.innerHTML = "";
        for (let i = 0; i < 8; i++) {
            list_search.innerHTML += `<li>${services[i]}</li>`;
        }
        tl_animate.play();
    }
});
inp_search.addEventListener("blur", (_) => {
    tl_animate.reverse();
});
function searchFunc(e) {
    let filtred_data = services
        .filter((el) => el.toLowerCase().includes(e.target.value.toLowerCase()))
        .splice(0, 8);
    list_search.innerHTML = "";
    if (filtred_data.length > 0) {
        filtred_data.forEach((el) => {
            list_search.innerHTML += `<li style="opacity : 0">${el}</li>`;
        });
        gsap.to(".list li", { opacity: 1, stagger: 0.1, duration: 0.3 });
    } else {
        list_search.innerHTML += `<p class="mb-0 p-3">No Data was Found !</p>`;
    }
}
inp_search.addEventListener("input", (e) => searchFunc(e));

//function of Categories
const servicesByCategory = [
    {
        category: "Assembly",
        service: [
            "General Furniture Assembly",
            "Crib Assembly",
            "PAX Assembly",
            "Bookshelf Assembly",
            "Desk Assembly",
        ],
        description: [
            "Our assembly services ensure your furniture is set up correctly and safely.",
            "From cribs to complex bookshelves, we handle all types of furniture assembly with precision.",
        ],
        image: "Assembly.webp",
    },
    {
        category: "Mounting",
        service: [
            "Hang Art, Mirror & Decor",
            "Install Blinds & Window Treatments",
            "Mount & Anchor Furniture",
            "Install Shelves, Rods & Hooks",
            "Other Mounting",
            "TV Mounting",
        ],
        description: [
            "Expert mounting services to enhance your space and secure your valuables.",
            "Whether it's art, mirrors, or TVs, we mount everything perfectly level and sturdy.",
        ],
        image: "Mounting.jpg",
    },
    {
        category: "Moving",
        service: [
            "Truck-Assisted Help Moving",
            "Trash & Furniture Removal",
            "Rearrange Furniture",
            "Heavy Lifting & Loading",
        ],
        description: [
            "Make your move stress-free with our professional and efficient moving services.",
            "From heavy lifting to careful transportation, we ensure your belongings are moved safely.",
        ],
        image: "Moving.webp",
    },
    {
        category: "Cleaning",
        service: [
            "Move Out Clean",
            "Apartment Cleaning",
            "Deep Clean",
            "Party Clean Up",
        ],
        description: [
            "Our cleaning services are thorough and tailored to your specific needs for a spotless environment.",
            "From deep cleans to post-party cleanups, we leave your space looking and feeling fresh.",
        ],
        image: "cleaning.avif",
    },
    {
        category: "Outdoor helping",
        service: ["Branch & Hedge Trimming", "Gardening & Weeding"],
        description: [
            "Keep your garden and outdoor spaces well-maintained with our expert trimming and weeding services.",
            "Our outdoor services help you enjoy a beautiful and tidy garden all year round.",
        ],
        image: "outdoor.webp",
    },
    {
        category: "Home repairs",
        service: [
            "Appliance Installation & Repairs",
            "Wall Repair",
            "Plumbing Help",
            "Flooring & Tiling Help",
        ],
        description: [
            "Home repairs made easy with our skilled technicians ready to fix any issue.",
            "From leaky faucets to installing new floors, we cover a wide range of home repair services.",
        ],
        image: "homerepairs.avif",
    },
    {
        category: "Painting",
        service: [
            "Outdoor Painting",
            "Accent Wall Painting",
            "Wallpaper Removal",
        ],
        description: [
            "Transform your space with our professional painting services, from exterior jobs to accent walls.",
            "We provide meticulous painting services that guarantee a flawless finish every time.",
        ],
        image: "painting.avif",
    },
    {
        category: "Trending",
        service: [
            "Desk Assembly",
            "Hang Art, Mirror & Decor",
            "Install Blinds & Window Treatments",
            "Mount & Anchor Furniture",
            "Install Shelves, Rods & Hooks",
            "Other Mounting",
            "TV Mounting",
        ],
        description: [
            "Stay up-to-date with the latest in-demand services that are currently trending.",
            "Our trending category is constantly updated to reflect the newest and most popular services.",
        ],
        image: "trending.avif",
    },
];
let categories_list = document.querySelectorAll(".categories li");
let inf_categories = document.querySelector(".container_info_categories");
function handleChangeCategory(index) {
    categories_list.forEach((el) => el.classList.remove("active"));
    categories_list[index].classList.add("active");
    let services = servicesByCategory[index].service;
    inf_categories.children[0].innerHTML = "";
    for (let i = 0; i < services.length; i++) {
        inf_categories.children[0].innerHTML += `<button class="btn btn-outline-dark">${services[i]}</button>`;
    }
    let title = inf_categories.children[1].children[0].children[0];
    let par = inf_categories.children[1].children[0].children[1];
    title.textContent = servicesByCategory[index].category;
    let descriptions = servicesByCategory[index].description;
    par.innerHTML = "";
    let image = inf_categories.children[1].children[1];
    image.src = `${window.location.href}images/${servicesByCategory[index].image}`;
    for (let i = 0; i < descriptions.length; i++) {
        par.innerHTML += ` <p><i class="fa-solid fa-check"></i>${descriptions[i]}</p>`;
    }
    let animate = gsap
        .timeline({ paused: true })
        .fromTo(inf_categories.children[0], {opacity : 0, x : -40},{opacity : 1, x : 0})
        .fromTo(inf_categories.children[1].children[0], {opacity : 0, x : -40},{opacity : 1, x : 0},"<").fromTo(image,{opacity : 0, x : -40},{opacity : 1, x : 0},'<+=.3');
    animate.play();
}
handleChangeCategory(0);
categories_list.forEach((el, i) =>
    el.addEventListener("click", (_) => handleChangeCategory(i))
);
