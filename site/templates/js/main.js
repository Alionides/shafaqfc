// Tailwind theme setup inspired by jersey colors
tailwind.config = {
    theme: {
        extend: {
            colors: {
                shafaq: {
                    green: '#00674e', // deep green from jersey
                    yellow: '#f7bd02', // warm yellow stripe
                    sky: '#7ec0f3',
                    dusk: '#ff9a76',
                },
            },
            fontFamily: {
                display: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            boxShadow: {
                glow: '0 8px 30px rgba(31, 107, 88, .25)'
            },
            backgroundImage: {
                'pitch-gradient': 'linear-gradient(135deg, #1f6b58 0%, #155644 60%, #0e3c2f 100%)',
                'sunset': 'radial-gradient(circle at 80% 20%, rgba(255, 188, 66, .25) 0, transparent 40%), radial-gradient(circle at 10% 10%, rgba(126,192,243,.25) 0, transparent 40%), linear-gradient(180deg, #7ec0f3 0%, #ff9a76 100%)'
            }
        }
    }
}

$(document).ready(function(){
    $(".main-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
        navText: ["‹","›"]
    });
    $('.sponsors-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 1800,
        autoplaySpeed: 600,
        autoplayHoverPause: false,
        smartSpeed: 600,
        margin: 16,
        dots: false,
        nav: false,
        slideBy: 1,
        responsive: {
            0:   { items: 2 },
            640: { items: 3 },
            1024:{ items: 5 },
            1280:{ items: 6 }
        }
    });

    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        zoomable: true,
    });


});


