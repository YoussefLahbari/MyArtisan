<style>
    .panels {
        --panel-width: calc(100% / 6);
        --darkblue: #0d7a5f;
        position: fixed;
        top: 0;
        left: 50%;
        width: 180vw;
        height: 100%;
        transform: translateX(-50%) skewX(-35deg);
        clip-path: circle(100%);
        z-index: 1;
        background: #fff;
    }

    .panels .panel {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: var(--panel-width);
        transform: scaleY(0);
        transform-origin: top;
        background: var(--darkblue);
    }

    .panels .panel:nth-child(even) {
        transform-origin: bottom;
    }

    .panels .panel:nth-child(2) {
        left: calc(var(--panel-width) - 1px);
    }

    .panels .panel:nth-child(3) {
        left: calc(calc(var(--panel-width) * 2) - 2px);
    }

    .panels .panel:nth-child(4) {
        left: calc(calc(var(--panel-width) * 3) - 4px);
    }

    .panels .panel:nth-child(5) {
        left: calc(calc(var(--panel-width) * 4) - 5px);
    }

    .panels .panel:nth-child(6) {
        left: calc(calc(var(--panel-width) * 5) - 6px);
    }
</style>
<ul class="panels">
    <li class="panel"></li>
    <li class="panel"></li>
    <li class="panel"></li>
    <li class="panel"></li>
    <li class="panel"></li>
    <li class="panel"></li>
</ul>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script>
    const tl_ = gsap.timeline({
        paused: true
    });
    tl_.to(".panels .panel:first-child, .panels .panel:last-child", {
            scaleY: 1,
            duration: 1,
        })
        .to(
            ".panels .panel:not(:first-child):not(:last-child)", {
                scaleY: 1
            },
            "-=0.5"
        )
        .to(".panels .panel", {
            scaleY: 0,
            duration: 0.3,
            stagger: 0.05,
        })
        .to(".panels", {
            clipPath: "circle(0%)",
            skewX: 0,
            duration: 0.5,
        })
    window.addEventListener("DOMContentLoaded", function() {
        tl_.play();
    });
</script>